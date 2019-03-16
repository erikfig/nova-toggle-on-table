Nova.booting((Vue, router, store) => {
    Vue.component('index-nova-toggle-on-table', require('./components/IndexField'))
    Vue.component('detail-nova-toggle-on-table', require('./components/DetailField'))
    Vue.component('form-nova-toggle-on-table', require('./components/FormField'))
})
