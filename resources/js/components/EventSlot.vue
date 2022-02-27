<template>
    <button :class="buttonClass" @click="$refs.isOpen.openModal()">
        <div>
            <div class="font-semibold">{{ title }}</div>
            <div class="text-xs text-gray-300">{{ time }}</div>
        </div>
    </button>
    <Modal ref="isOpen"></Modal>
</template>

<script>
import Modal from './Modal'
export default {
    name: "EventSlot",
    components: { Modal },
    props:['title','time','description','widthClass','colorClass','colorHoverClass','borderColorClass','watchDescription'],
    provide() {
        return {
            description: this.description,
            watchDescription: this.watchDescription
        }
    },
    computed: {
        buttonClass(){
            return `event-block text-sm overflow-hidden text-left whitespace-nowrap items-center ${this.widthClass} ${this.colorHoverClass} ${this.colorClass} ${this.borderColorClass}`
        }
    }
}
</script>

<style scoped>

</style>
