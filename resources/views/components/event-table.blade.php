<section>
    <div class="container mx-auto px-4 xl:px-48 my-8">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam architecto assumenda cupiditate deleniti earum eveniet ex explicabo illum mollitia omnis, reiciendis tempore vitae? Dolor, harum ipsum minus odio quam tempore?
        <div id="app" class="flex my-12">
            <div class="w-40 bg-gray-900 text-white text-sm divide-y divide-white border-r border-white">
                <div class="h-10">&nbsp;</div>
                <div class="px-4 py-2 h-16">Bethesda Global</div>
                <div class="px-4 py-2 h-16">Capcom Japan</div>
                <div class="px-4 py-2 h-16">Microsoft</div>
            </div>
            <div class="w-full bg-gray-500 divide-y divide-white overflow-x-auto">
                <div class="h-10 bg-gray-900 text-white text-sm flex divide-x divide-white" style="width: 2560px">
                    <div class="flex justify-center w-32 items-center">08:00 AM</div>
                    <div class="flex justify-center w-32 items-center">08:30 AM</div>
                    <div class="flex justify-center w-32 items-center">09:00 AM</div>
                    <div class="flex justify-center w-32 items-center">09:30 AM</div>
                    <div class="flex justify-center w-32 items-center">10:00 AM</div>
                    <div class="flex justify-center w-32 items-center">10:30 AM</div>
                    <div class="flex justify-center w-32 items-center">11:00 AM</div>
                    <div class="flex justify-center w-32 items-center">11:30 AM</div>
                    <div class="flex justify-center w-32 items-center">12:00 PM</div>
                    <div class="flex justify-center w-32 items-center">12:30 PM</div>
                    <div class="flex justify-center w-32 items-center">01:00 PM</div>
                    <div class="flex justify-center w-32 items-center">01:30 PM</div>
                    <div class="flex justify-center w-32 items-center">02:00 PM</div>
                    <div class="flex justify-center w-32 items-center">02:30 PM</div>
                    <div class="flex justify-center w-32 items-center">03:00 PM</div>
                    <div class="flex justify-center w-32 items-center">03:30 PM</div>
                    <div class="flex justify-center w-32 items-center">04:00 PM</div>
                    <div class="flex justify-center w-32 items-center">04:30 PM</div>
                    <div class="flex justify-center w-32 items-center">05:00 PM</div>
                    <div class="flex justify-center w-32 items-center">05:30 PM</div>
                </div>
                <div class="h-16 flex divide-x divide-white w-table">
                    <event-slot
                        title="Ghostwire Tokyo"
                        time="8:00 AM EDT - 09:30 AM EDT"
                        description="Check out some footage from the brand new IP Ghostwire Tokyo!"
                        watch-description="<a href='https://youtube.com/c/bethesda' target='_blank'>YouTube</a>"
                        width-class="w-96"
                        color-class="text-purple-500"
                        bg-color="bg-purple-500"
                        hover-color="hover:bg-purple-600"
                        border-color="border-purple-500"
                    ></event-slot>
                </div>
                <div class="h-16 flex divide-x divide-white w-table">
                    <event-slot-empty></event-slot-empty>
                    <event-slot
                        title="Monster Hunter Stream - Capcom JP"
                        time="9:00 AM EDT - 10:00 AM EDT"
                        description="Showcasing the next generation console Monster Hunter!"
                        watch-description="<a href='https://youtube.com/c/capcom' target='_blank'>YouTube</a>"
                        width-class="w-64"
                        color-class="text-orange-500"
                        bg-color="bg-orange-500"
                        hover-color="hover:bg-orange-600"
                        border-color="border-orange-500"
                    ></event-slot>
                </div>
                <div class="h-16 flex divide-x divide-white w-table">
                    <event-slot
                        title="Forza (Untitled)"
                        time="08:00 AM EDT - 08:30 AM EDT"
                        description="Yes, we are working on a new Forza game!"
                        watch-description="<a href='https://youtube.com/c/xbox' target='_blank'>YouTube</a>"
                        width-class="w-32"
                        color-class="text-green-500"
                        bg-color="bg-green-500"
                        hover-color="hover:bg-green-600"
                        border-color="border-green-500"
                    ></event-slot>
                </div>
            </div>
        </div>
    </div>
</section>
