// File handles all texts shown within navigation bar to keep jsx component clean
// and promote separation of concerns.

export var navTextAdmin = [
  {
    id: 1,
    key: "page_home",
    name: "admin 1",
    selected: false,
    link: "/",
    type: "link",
  },
  {
    id: 2,
    key: "page_properties",
    name: "admin 2",
    selected: false,
    link: "/",
    type: "link",
  },
  {
    id: 3,
    key: "page_applications",
    name: "admin 3",
    selected: false,
    link: "/test",
    type: "link",
  },
  {
    id: 4,
    key: "page_viewings",
    name: "admin 4",
    selected: false,
    link: "/",
    type: "link",
  },
  {
    id: 5,
    key: "page_users",
    name: "Convert Users",
    selected: false,
    link: "/convert-user",
    type: "link",
  },
    {
        id: 5,
        key: "page_tenants",
        name: "Tenants",
        selected: false,
        link: "/admin-tenants",
        type: "link",
    },
];

export var navTextTenant = [
  {
    id: 1,
    key: "page_home",
    name: "tenant 1",
    selected: false,
    link: "/tenant-test",
    type: "link",
  },
  {
    id: 2,
    key: "page_properties",
    name: "Tenant 2",
    selected: false,
    link: "/tenant-test",
    type: "link",
  },
  {
    id: 3,
    key: "page_applications",
    name: "Tenant 3",
    selected: false,
    link: "/tenant-test",
    type: "link",
  },
  // {
  //   id: 4,
  //   key: "page_logout",
  //   name: "Logout",
  //   selected: false,
  //   link: "",
  //   type: "link",
  // },
];

export var navTextLandlord = [
  {
    id: 1,
    key: "page_home",
    name: "Dashboard",
    selected: false,
    link: "/landlord-home",
    type: "link",
  },
  {
    id: 2,
    key: "page_properties",
    name: "Properties",
    selected: false,
    link: "/landlord-properties",
    type: "link",
  },
  {
    id: 3,
    key: "page_applications",
    name: "My Calendar",
    selected: false,
    link: "/landlord-properties",
    type: "link",
  },
  {
    id: 4,
    key: "page_messages",
    name: "Messages(*)",
    selected: false,
    link: "/landlord-properties",
    type: "link",
  },
];
