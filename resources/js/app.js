require('./bootstrap');

/*------ Vue Components Registration ------*/

import { createApp } from 'vue';
import Modal2 from './plugins/modals/ModalPlugin';
import EventSlot from './components/EventSlot';
import EventSlotEmpty from "./components/EventSlotEmpty";
import Tabs from "./components/Tabs";
import Visible from "./components/Visible";
import ConfirmationDialog from "./components/ConfirmationDialog";
import Modal from "./components/Modal";
import ConfirmButton from "./components/ConfirmButton";
//import Modal2 from "./components/Modal2";

const app = createApp( {
    components: {
        EventSlot,
        EventSlotEmpty,
        Tabs,
        Visible,
        ConfirmationDialog,
        Modal,
        ConfirmButton
    },

    methods: {
        confirm(message) {
            this.$modal2.dialog(message)
                .then(confirmed => {
                    confirmed ? alert('Proceed') : this.$modal2.dialog('Okay, canceled')
                })
        }
    }
}).use(Modal2)
    .mount('#app')

/*---------------- Vanilla Javascript ------------------*/

const menuItems = document.querySelectorAll('nav ul li')
const nav = document.querySelector('nav ul')
const menuBackground = document.querySelector('.menu-background')
const arrow = document.querySelector('.arrow')

menuItems.forEach(menuItem => menuItem.addEventListener('mouseenter', handleEnter))
menuItems.forEach(menuItem => menuItem.addEventListener('mouseleave', handleLeave))

function handleEnter() {
    const menu = this.querySelector('.menu')
    menu.classList.add('menu-enter')
    setTimeout(() => menu.classList.add('menu-enter-active'), 100)
    const menuCoords = menu.getBoundingClientRect()
    const navCoords = nav.getBoundingClientRect()
    menuBackground.classList.add('open')
    arrow.classList.add('open')

    menuBackground.style.setProperty('transform',
    `
        translate(${menuCoords.left}px, ${menuCoords.top + window.scrollY}px)
        scaleX(${menuCoords.width/100})
        scaleY(${menuCoords.height/100})
    `)

    arrow.style.setProperty('transform',
        `
        translate(${menuCoords.left + (menuCoords.width / 2) - 7}px, ${menuCoords.top + navCoords.top}px)
        rotate(45deg) translateY(-50%)
    `)
}

function handleLeave() {
    const menu = this.querySelector('.menu')
    menu.classList.remove('menu-enter','menu-enter-active')
    menuBackground.classList.remove('open')
    arrow.classList.remove('open')
}
