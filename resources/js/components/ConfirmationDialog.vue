<template>
    <modal2 name="dialog">
        {{ params.message }}
        <template v-slot:footer>
            <button class="bg-gray-500 hover:bg-gray-600 rounded-lg text-white py-2 px-4 mr-2"
                    @click.prevent="handleClick(false)"
                    v-text="params.confirmButton"
            ></button>

            <button class="bg-blue-500 hover:bg-blue-600 rounded-lg text-white py-2 px-4"
                    @click.prevent="handleClick(true)"
                    v-text="params.cancelButton"
            ></button>
        </template>
    </modal2>
</template>

<script>
import Modal from '../plugins/modals/ModalPlugin';

export default {
    name: "ConfirmationDialog",
    data() {
        return {
            params: {
                message: "Are you sure?",
                confirmButton: 'Continue',
                cancelButton: 'Canceled'
            }
        }
    },
    beforeMount() {
        Modal.events.$on('show', params => {
            Object.assign(this.params, params)
        })
    },
    methods: {
        handleClick(confirmed) {
            Modal.events.$emit('clicked', confirmed)
            this.$modal2.hide()
        }
    }
}
</script>

<style scoped>

</style>
