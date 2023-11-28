<template>
    <div class="vertical-menu">
        <div data-simplebar class="h-100">
            <div id="sidebar-menu">
                <ul class="metismenu list-unstyled" id="side-menu">
                    <li class="menu-title" key="t-menu">Menu</li>
                    <li>
                        <router-link :to="{ name: 'dashboard' }" class=" waves-effect">
                            <i class="bx bx-home-circle"></i>
                            <span key="t-dashboards">Dashboards</span>
                        </router-link>
                    </li>
                    <li>
                        <router-link :to="{ name: 'department' }" class=" waves-effect">
                            <i class="bx bx-home-circle"></i>
                            <span key="t-dashboards">Department</span>
                        </router-link>
                    </li>
                    <li>
                        <router-link :to="{ name: 'employee' }" class=" waves-effect">
                            <i class="bx bx-home-circle"></i>
                            <span key="t-dashboards">Employee</span>
                        </router-link>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>