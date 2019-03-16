<template>
    <div style="position: relative;margin-top: -20px;">
        <a
            href=""
            @click.prevent="save()"
            class="erik-flip-button"
            :class="{ 'active': value, }"
            :data-label-on="__('Yes')"
            :data-label-off="__('No')"
        ></a>
        <span class="loading" :class="{ 'show': preloader }">{{ __('loading') }}</span>
    </div>
</template>

<script>
import qs from 'qs';

export default {
    props: ['resourceName', 'field'],
    data() {
        return {
            value: null,
            preloader: false
        }
    },
    methods: {
        save() {
            this.preloader = true

            // setTimeout(() => this.preloader = false, 3000)
            const id = this.$parent.resource.id.value
            const data = {}
            data[this.field.attribute] = !this.value
            console.log(qs.stringify(data))

            Nova.request().post(`/erikfig/toggle/${this.resourceName}/${id}`, qs.stringify(data))
                .then((res) => {
                    this.preloader = false
                    this.value = !this.value
                })
                .catch(() => {
                    this.preloader = false
                })
        }
    },
    mounted(){
        if (this.field.value === 'false') {
            this.value = false
        } else if (this.field.value === 'true') {
            this.value = true
        } else {
            this.value = this.field.value
        }
    }
}
</script>
