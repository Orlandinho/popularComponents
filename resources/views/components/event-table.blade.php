<section>
    <div class="container mx-auto px-4 xl:px-48 my-8">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam architecto assumenda cupiditate deleniti earum eveniet ex explicabo illum mollitia omnis, reiciendis tempore vitae? Dolor, harum ipsum minus odio quam tempore?
        <div id="app" class="flex my-12">
            <div class="w-40 bg-gray-900 text-white text-sm divide-y divide-white border-r border-white">
                <div class="h-10">&nbsp;</div>
                <div class="px-4 py-2 h-16">Bethesda Global</div>
                <div class="px-4 py-2 h-16">Bethesda Global</div>
                <div class="px-4 py-2 h-16">Bethesda Global</div>
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
                    <button class="event-block bg-red-600 hover:bg-red-700 text-white text-sm w-64">Event</button>
                </div>
                <div class="h-16 flex divide-x divide-white w-table">
                    <event-slot-empty></event-slot-empty>
                    <event-slot
                        title="Monster Hunter Stream - Capcom JP"
                        time="9:00 AM EDT - 10:00 AM EDT"
                        description="Showcasing the next generation console Monster Hunter"
                        watch-description="Watch on <a href='https://youtube.com/capcom_jp'>YouTube</a>"
                        width-class="w-64"
                        color-class="bg-yellow-600"
                        color-hover-class="hover:bg-yellow-700"
                        border-color-class="border-yellow-600"
                    ></event-slot>
                </div>
                <div class="h-16 flex divide-x divide-white w-table">Some Schedule</div>
            </div>
        </div>
    </div>
</section>
