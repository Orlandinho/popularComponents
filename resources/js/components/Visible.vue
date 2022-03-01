<template>
    <transition name="fade">
        <div v-show="shouldDisplay">
            <slot></slot>
        </div>
    </transition>
</template>

<script>
import inViewport from 'in-viewport';

export default {
    props: ['whenHidden'],
    name: "Visible",
    data() {
        return {
            shouldDisplay: false
        }
    },
    mounted() {
        window.addEventListener('scroll', () => {
            this.shouldDisplay = ! inViewport(
                document.querySelector(this.whenHidden)
            )
        }, {passive: true})
    }
}
</script>

<style scoped>
    .fade-enter-active, .fade-leave-active {
        transition: opacity 0.3s;
    }
    .fade-enter-from, .fade-leave-to {
        opacity: 0;
    }
</style>
