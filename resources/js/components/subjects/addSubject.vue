<template>
    <div
        className="col-md-6 offset-md-3 border rounded p-4 mt-2
    shadow"
    >
        <form @submit.prevent="addSubject">
            <div class="mb-3">
                <label for="Name" class="form-label">Subject Name</label>
                <input
                    type="text"
                    class="form-control"
                    id="Name"
                    v-model="subject.name"
                />
            </div>

            <button type="submit" className="btn btn-outline-primary">
                Enregister
            </button>
            <router-link to="/subjects" class="btn btn-outline-danger mx-2">
                Cancel
            </router-link>
        </form>
    </div>
</template>
<script setup>
import { ref } from "vue";
import { useRouter } from "vue-router";
const router = useRouter();
import axios from "axios";
const subject = ref({
    name: "",
});
const addSubject = async () => {
    await axios
        .post("http://localhost:8000/api/subjects/", subject.value)
        .then(() => router.push({ name: "viewsubjects" }))
        .catch((err) => console.log(err));
};
</script>
<style scoped></style>
