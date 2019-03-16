<template>
    <panel-item :field="fieldToPanel" />
</template>

<script>
    export default {
        props: ['resource', 'resourceName', 'resourceId', 'field'],
        computed: {
            fieldToPanel() {
                const data = {};
                let css = 'erik-flip-button';
                if (this.field.value === 'true') {
                    css += " active";
                }

                data["name"] = this.field.name;
                data["asHtml"] = true;
                data["value"] = `<h1>${this.field.value}</h1>`;
                data["value"] = `
<div style="position: relative">
    <span
        class="${css}"
        data-label-on="${this.__('Yes')}"
        data-label-off="${this.__('No')}"
    ></span>
</div>
                `;

                return data;
            }
        }
    }
</script>
