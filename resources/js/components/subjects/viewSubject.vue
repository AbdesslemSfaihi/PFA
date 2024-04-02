<template>
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-success">
            <div class="container-fluid">
                <router-link
                    :to="{ name: 'Addsubject' }"
                    class="btn btn- outline-light"
                >
                    New Subject
                </router-link>
            </div>
        </nav>
        <div class="py-6">
            <table class="table table-striped shadow">
                <thead>
                    <tr>
                        <td>Name</td>
                        <td>Modifier</td>
                        <td>Supprimer</td>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="cat in subjects" :key="cat.id">
                        <td>{{ cat.Name }}</td>

                        <router-link
                            :to="{
                                name: 'editSubject',
                                params: { id: cat.id },
                            }"
                            class="btn btn-success"
                            >Edit</router-link
                        >

                        <td>
                            <button
                                class="btn btn-danger mx-2"
                                @click="deletesubject(cat.id)"
                            >
                                Supprimer
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script setup>
import { ref, onMounted } from "vue";
import axios from "axios";
const subjects = ref([]);
const getsubjects = async () => {
    await axios
        .get("http://localhost:8000/api/subjects")
        .then((res) => {
            subjects.value = res.data;
            console.log(subjects.value);
        })
        .catch((error) => {
            console.log(error);
        });
};
onMounted(() => {
    getsubjects();
});
const deletesubject = async (id) => {
    try {
        await axios.delete(`http://localhost:8000/api/subjects/${id}`);

        getsubjects();
    } catch (error) {
        console.log(error);
    }
};
</script>

<style lang="scss" scoped></style>
