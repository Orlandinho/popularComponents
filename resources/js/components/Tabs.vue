<template>
    <div>
        <TabGroup>
            <TabList>
                <Tab
                    as="template"
                    v-slot="{ selected }"
                >
                    <button
                        class="font-semibold hover:bg-yellow-400 px-4 py-2"
                        :class="[selected ? 'bg-yellow-500 text-white' : 'bg-white text-gray-900']"
                    >
                        Friday, August 20th
                    </button>
                </Tab>

                <Tab
                    as="template"
                    v-slot="{ selected }"
                >
                    <button
                        class="font-semibold hover:bg-yellow-400 px-4 py-2"
                        :class="[selected ? 'bg-yellow-500 text-white' : 'bg-white text-gray-900']"
                    >
                        Saturday, August 21th
                    </button>
                </Tab>

                <Tab
                    as="template"
                    v-slot="{ selected }"
                >
                    <button
                        class="font-semibold hover:bg-yellow-400 px-4 py-2"
                        :class="[selected ? 'bg-yellow-500 text-white' : 'bg-white text-gray-900']"
                    >
                        Sunday, August 22th
                    </button>
                </Tab>
            </TabList>

            <TabPanels class="mt-2">
                <TabPanel :class="['rounded-xl p-3','focus:outline-none focus:ring-2 ring-offset-2 ring-offset-blue-400 ring-white ring-opacity-60',]"> Content 1</TabPanel>
                <TabPanel :class="['rounded-xl p-3','focus:outline-none focus:ring-2 ring-offset-2 ring-offset-blue-400 ring-white ring-opacity-60',]"> Content 2</TabPanel>
                <TabPanel :class="['rounded-xl p-3','focus:outline-none focus:ring-2 ring-offset-2 ring-offset-blue-400 ring-white ring-opacity-60',]"> Content 3</TabPanel>
            </TabPanels>
        </TabGroup>
    </div>
</template>

<script>
import { TabGroup, TabList, Tab, TabPanels, TabPanel } from '@headlessui/vue'
export default {
    name: "Tabs",
    components: {
        TabGroup,
        TabList,
        Tab,
        TabPanels,
        TabPanel,
    },
}
</script>

<style scoped>

</style>
