<template>
    <TransitionRoot appear :show="isOpen" as="template">
        <Dialog as="div" @close="closeModal">
            <div class="fixed inset-0 z-10 overflow-y-auto">
                <div class="min-h-screen px-4 text-center">
                    <TransitionChild
                        as="template"
                        enter="duration-300 ease-out"
                        enter-from="opacity-0"
                        enter-to="opacity-100"
                        leave="duration-200 ease-in"
                        leave-from="opacity-100"
                        leave-to="opacity-0"
                    >
                        <DialogOverlay class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" />
                    </TransitionChild>

                    <span class="inline-block h-screen align-middle" aria-hidden="true"> &#8203; </span>

                    <TransitionChild
                        as="template"
                        enter="duration-300 ease-out"
                        enter-from="opacity-0 scale-95"
                        enter-to="opacity-100 scale-100"
                        leave="duration-200 ease-in"
                        leave-from="opacity-100 scale-100"
                        leave-to="opacity-0 scale-95"
                    >
                        <div :class="`bg-gray-900 text-gray-200 inline-block w-full max-w-md p-6 my-8 overflow-hidden border ${borderColor} text-left align-middle transition-all transform shadow-xl rounded`"
                        >
                            <button @click="closeModal" :class="`absolute top-3 right-1 ${colorClass}`">
                                x
                            </button>
                            <DialogTitle
                                as="h3"
                                :class="`text-2xl border-l-4 ${borderColor} pl-3 font-medium mb-6 text-gray-200`"
                            >
                                {{ title }}
                            </DialogTitle>
                            <div>
                                <p class="text-sm mt-4 text-gray-200">
                                    {{ description }}
                                </p>
                                <p class="text-sm mt-4 text-gray-200">
                                    {{ time }}
                                </p>
                            </div>

                            <div class="mt-4">
                                <p class="text-sm text-gray-200">Watch it on <span v-html="watchDescription" :class="`hover:underline ${colorClass}`"></span> </p>
                            </div>
                        </div>
                    </TransitionChild>
                </div>
            </div>
        </Dialog>
    </TransitionRoot>
</template>

<script>
import {onMounted, ref} from 'vue'
import {
    TransitionRoot,
    TransitionChild,
    Dialog,
    DialogOverlay,
    DialogTitle,
} from '@headlessui/vue'

export default {
    name:"Modal",
    inject:['description','watchDescription','title','colorClass','bgColor','hoverColor','borderColor','time'],
    components: {
        TransitionRoot,
        TransitionChild,
        Dialog,
        DialogOverlay,
        DialogTitle,
    },

    setup() {
        const isOpen = ref(false)

        return {
            isOpen,
            closeModal() {
                isOpen.value = false
            },
            openModal() {
                isOpen.value = true
            },
        }
    },
}
</script>

<style scoped>

</style>
