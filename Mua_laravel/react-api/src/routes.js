import ShowAPILazada from "./components/ShowAPILazada";

const routes = [
    {
        path:"/",
        exact : true,
        main : () => <ShowAPILazada/>,
    },
    {
        path : "/admin",
        exact : true,
        main : () => <ShowAPILazada/>,
    },
];

export {routes} ;