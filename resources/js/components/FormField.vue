<template>
    <default-field :field="field" :errors="errors">
        <template slot="field">
            <div style="position: relative">
                <a
                    href=""
                    @click.prevent="value = !value"
                    class="erik-flip-button"
                    :class="{ 'active': value }"
                    :data-label-on="__('Yes')"
                    :data-label-off="__('No')"
                ></a>
            </div>
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
            if (this.field.value === 'false') {
                this.value = false
            } else if (this.field.value === 'true') {
                this.value = true
            } else {
                this.value = this.field.value
            }
        },

        /**
         * Fill the given FormData object with the field's internal value.
         */
        fill(formData) {
            formData.append(this.field.attribute, this.value)
        },

        /**
         * Update the field's internal value.
         */
        handleChange(value) {
            this.value = value
        },
    },
    mounted() {
        console.log(this)
    }
}
</script>
