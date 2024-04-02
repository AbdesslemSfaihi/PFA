<template>
    Product
    <div>
        <h3 class="text-center">Edit Subject</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="updateSubject">
                    <div class="form-group">
                        <label>Name</label>

                        <input
                            type="text"
                            class="form-control"
                            v-model="subject.name"
                        />
                    </div>
                    <button type="submit" class="btn btn-primary">
                        Update
                    </button>
                </form>
            </div>
        </div>
    </div>
</template>

<script setup>
import axios from "axios";
import { useRouter, useRoute } from "vue-router";
const router = useRouter();
const route = useRoute();
import { ref, onMounted } from "vue";
const subject = ref({});
const fetchSubject = async () => {
    await axios
        .get(`http://localhost:8000/api/subjects/${route.params.id}`)
        .then((res) => {
            subject.value = res.data;
        })
        .catch((err) => {
            console.error(err);
        });
};
const updateSubject = async () => {
    await axios
        .patch(
            `http://localhost:8000/api/subjects/${route.params.id}`,
            subject.value
        )

        .then(() => {
            router.push({ name: "viewsubjects" });
        })
        .catch((err) => {
            console.error(err);
        });
};

onMounted(async () => {
    await fetchSubject();
});
</script>
