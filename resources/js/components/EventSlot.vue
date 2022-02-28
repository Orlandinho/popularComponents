<template>
    <button :class="`event-block text-sm overflow-hidden text-left whitespace-nowrap items-center ${this.hoverColor} ${this.bgColor} ${this.widthClass}`" @click="$refs.isOpen.openModal()">
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
    props:['title','time','description','widthClass','colorClass','bgColor','borderColor','watchDescription','hoverColor'],
    provide() {
        return {
            description: this.description,
            watchDescription: this.watchDescription,
            title: this.title,
            colorClass: this.colorClass,
            bgColor: this.bgColor,
            borderColor: this.borderColor,
            hoverColor: this.hoverColor,
            time: this.time
        }
    }
}
</script>

<style scoped>

</style>
