<template>
    <default-field :field="field" :errors="errors">
        <template slot="field">
            <input :id="field.name" type="password"
                   class="w-full form-control form-input form-input-bordered"
                   :class="errorClasses"
                   :placeholder="field.name"
                   v-model="value"
                   autocomplete="new-password"
            />
            <button type="button" class="ml-auto btn btn-default btn-primary mt-3" @click="switchVisibility(field.name)">
                Show/Hide
            </button>
        </template>
    </default-field>
</template>

<script>
    import { FormField, HandlesValidationErrors } from 'laravel-nova'
    export default {
        mixins: [FormField, HandlesValidationErrors],
        props: ['resourceName', 'resourceId', 'field'],
        methods: {
            /*
             * Set the initial, internal value for the field.
             */
            setInitialValue() {
                // this.value = this.field.value || ''
                this.value = ''
            },
            /**
             * Fill the given FormData object with the field's internal value.
             */
            fill(formData) {
                formData.append(this.field.attribute, this.value || '')
            },
            /**
             * Update the field's internal value.
             */
            handleChange(value) {
                this.value = value
            },
            switchVisibility(elem) {
                const passwordField = document.getElementById(elem);
                if (passwordField.getAttribute('type') === 'password') passwordField.setAttribute('type', 'text');
                else passwordField.setAttribute('type', 'password');
            }
        },
    }
</script>
