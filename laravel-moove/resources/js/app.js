require("./bootstrap");

// React componentsimport ContractRow from "./react/components/tables/ContractRow";
import ReactRenderer from "./react/ReactRenderer";
import React from "react";
import NavBar from "./react/components/navBar/NavBar";
import NavBarHeader from "./react/components/headers/NavBarHeader";
import ContractHeader from "./react/components/headers/ContractHeader";
import ButtonNavCustom from "./react/components/buttons/ButtonNav";
import AppNavBar from "./react/components/navBar/AppNavBarCustom";
import TenancyForm from "./react/components/forms/TenantCheckForm";
import CalendlyBooking from "./react/components/forms/CalendlyComponent";
import Dashboard from "./react/pages/Dashboard";
import SigningComponent from './react/components/forms/SigningComponent';
import LandlordProperties from "./react/pages/LandlordProperties";
import TenantList from "../js/react/components/admin/TenantList";
import InviteLandlordComponent from '../js/react/components/admin/InviteLandlord';
import ContractCreate from "./react/pages/ContractCreate";
import ContractCard from "./react/cards/ContractCard";
import ContractShow from "./react/pages/ContractShow";
import Property from "./react/components/landlord/property/Property";
import PropertyCard from "../js/react/cards/PropertyCard";
import PropertyRow from "./react/components/tables/PropertyRow";
import TenantApplication from "../js/react/components/admin/TenantApplication";
import AdminProperties from "./react/pages/AdminProperties";
import Contract from "./react/components/landlord/contract/Contract";

const components = [
    {
        name: "NavBar",
        component: <NavBar />,
    },
    {
        name: "NavBarHeader",
        component: <NavBarHeader />,
    },
    {
        name: "ContractHeader",
        component: <ContractHeader />,
    },
    {
        name: "ButtonNavCustom",
        component: <ButtonNavCustom />,
    },
    {
        name: "AppNavBar",
        component: <AppNavBar />,
    },
    {
        name: "TenancyForm",
        component: <TenancyForm />,
    },
    {
        name: "CalendlyComponent",
        component: <CalendlyBooking />,
    },
    {
        name: "Dashboard",
        component: <Dashboard />,
    },
    {
        name: "LandlordProperties",
        component: <LandlordProperties />,
    },
    { name: "AdminProperties", component: <AdminProperties /> },
    {
        name: "Property",
        component: <Property />,
    },
    {
        name: "PropertyCard",
        component: <PropertyCard />,
    },
    { name: "PropertyRow", component: <PropertyRow /> },
    {
        name: "TenantList",
        component: <TenantList />,
    },
    {
        name: "TenantApplication",
        component: <TenantApplication />,
    },
    {
        name:"InviteLandlordComponent",
        component:<InviteLandlordComponent/>,
    },
    { name: "Contract", component: <Contract /> },
    { name: "ContractCreate", component: <ContractCreate /> },
    { name: "ContractShow", component: <ContractShow /> },
    { name: "ContractCard", component: <ContractCard /> },
    {
        name: "SigningComponent",
        component: <SigningComponent/>
    },

];

new ReactRenderer(components).renderAll();
