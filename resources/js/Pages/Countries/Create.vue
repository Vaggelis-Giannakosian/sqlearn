<template>
    <Head title="Χώρες"/>

    <BreezeAuthenticatedLayout>

        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight mb-0">
                Δημιουργία χώρας
            </h2>
        </template>

        <card>
            <div class="p-2 bg-white border-b border-gray-200">
                <div class="flex justify-between">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight mb-0">
                        Δημιουργία νέας χώρας
                    </h2>

                    <nav-link  :href="route('countries.index')">
                        <primary-button>
                           Επιστροφή
                        </primary-button>
                    </nav-link>
                </div>
            </div>

            <Form submit-method="post" :submit-url="route('countries.store')"/>

        </card>
    </BreezeAuthenticatedLayout>
</template>

<script>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue'
import {Head} from '@inertiajs/inertia-vue3';
import Form from './Form';

export default {
    components: {
        BreezeAuthenticatedLayout,
        Form,
        Head,
    },
}
</script>
