<template>
    <a-menu theme="light"
            mode="inline"
            :selected-keys="[current]"
            @click="handleClick"
    >
        <a-menu-item key="dashboard">
            <div class="flex items-center">
                <DashboardOutlined class="mr-3"/>

                <BreezeNavLink :href="route('dashboard')" :active="route().current('dashboard')">
                    Πίνακας Ελέγχου
                </BreezeNavLink>
            </div>
        </a-menu-item>

        <a-menu-item key="users" v-if="parseInt($page.props.auth.user.is_admin)">
            <div class="flex items-center">
                <UsergroupAddOutlined class="mr-3"/>

                <BreezeNavLink :href="route('users.index')" :active="route().current('users.*')">
                    Χρήστες
                </BreezeNavLink>
            </div>
        </a-menu-item>

        <a-menu-item key="products">
            <div class="flex items-center">
                <ShoppingOutlined class="mr-3"/>

                <BreezeNavLink :href="route('products.index')" :active="route().current('products.*')">
                    Προϊόντα
                </BreezeNavLink>
            </div>
        </a-menu-item>

        <a-menu-item key="providers">
            <div class="flex items-center">
                <UsergroupAddOutlined class="mr-3"/>

                <BreezeNavLink :href="route('providers.index')" :active="route().current('providers.*')">
                    Προμηθευτές
                </BreezeNavLink>
            </div>
        </a-menu-item>

        <a-menu-item key="categories">
            <div class="flex items-center">
                <FolderOutlined class="mr-3"/>

                <BreezeNavLink :href="route('categories.index')" :active="route().current('categories.*')">
                    Κατηγορίες
                </BreezeNavLink>
            </div>
        </a-menu-item>

        <a-menu-item key="countries">
            <div class="flex items-center">
                <GlobalOutlined class="mr-3"/>

                <BreezeNavLink :href="route('countries.index')" :active="route().current('countries.*')">
                    Χώρες
                </BreezeNavLink>
            </div>
        </a-menu-item>

    </a-menu>
</template>

<script>
import BreezeNavLink from '@/Components/NavLink.vue'
import {DashboardOutlined, GlobalOutlined, FolderOutlined,UsergroupAddOutlined, ShoppingOutlined} from '@ant-design/icons-vue'

export default {
    name: "Admin",
    props:['current','handleClick'],
    components:{
        BreezeNavLink,
        DashboardOutlined, GlobalOutlined,FolderOutlined,UsergroupAddOutlined,ShoppingOutlined
    }
}
</script>

<style scoped>

</style>
