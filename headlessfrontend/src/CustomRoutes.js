import Layouts from "./layouts";
import Page from "./pages";

const CustomRoutes = [
    {
        path:"/",
        secure:false,
        exact:true,
        layout:Layouts.DefaultLayout,
        component:Page.Home,
    },
    {
        path:"*",
        secure:false,
        exact:true,
        layout:Layouts.DefaultLayout,
        component:Page.Home,
    }
];

export default CustomRoutes;