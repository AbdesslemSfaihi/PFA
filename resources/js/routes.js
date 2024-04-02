import Accueil from "./components/accueil.vue";
import viewSubject from "./components/subjects/viewSubject.vue";
import addSubject from "./components/subjects/addSubject.vue";
import EditSubject from "./components/subjects/editSubject.vue";
export const routes = [
    {
        name: "accueil",
        path: "/",
        component: Accueil,
    },
    {
        name: "viewsubjects",
        path: "/subjects",
        component: viewSubject,
    },
    {
        name: "Addsubject",
        path: "/addsubject",
        component: addSubject,
    },
    {
        name: "editSubject",
        path: "/editSubject/:id",
        component: EditSubject,
    },
];
