<template>
    <button @click="confirm">
        <slot></slot>
    </button>
</template>

<script>
export default {
    name: "ConfirmButton",
    props: {
        message: {},
        confirmButton: {default: 'Continue'},
        cancelButton: {default: 'Cancel'},
    },
    data() {
        return {
            confirmed: false
        }
    },
    methods: {
        confirm(e) {
            if(this.confirmed) {
                return
            }

            e.preventDefault()

            this.$modal2.dialog({
                message: this.message,
                confirmButton: this.confirmButton,
                cancelButton: this.cancelButton
            })
                .then(confirmed => {
                    this.confirmed = confirmed

                    if(confirmed) {
                        this.$el.click()
                    }
                })
        }
    }
}
</script>

<style scoped>

</style>
