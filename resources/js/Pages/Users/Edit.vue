<template>
    <Head title="Χρήστες"/>

    <BreezeAuthenticatedLayout>

        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight mb-0">
                Επεξεργασία χρήστη
            </h2>
        </template>

        <card>
            <div class="p-2 bg-white border-b border-gray-200">
                <div class="flex justify-between">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight mb-0">
                        Ενημέρωση χρήστη "{{user.name+' '+ user.last_name}}"
                    </h2>

                    <nav-link  :href="route('users.index')">
                        <primary-button>
                            Επιστροφή
                        </primary-button>
                    </nav-link>
                </div>
            </div>

            <Form submit-method="put" :submit-url="route('users.update',user)"
                  :user="user" :countries="countries"/>
        </card>

    </BreezeAuthenticatedLayout>
</template>

<script>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue'
import {Head} from '@inertiajs/inertia-vue3';
import PrimaryButton from '@/Components/Buttons/PrimaryButton'
import Form from './Form'

export default {
    props:[
        'user',
        'countries'
    ],
    components: {
        BreezeAuthenticatedLayout,
        PrimaryButton,
        Form,
        Head,
    },
}
</script>
