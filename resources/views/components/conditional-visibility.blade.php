<div id="app" class="relative items-center flex flex-col p-8">
    <h1 class="mb-8 text-2xl font-bold">Conditional Visibility</h1>
    <div class="container w-3/4 bg-gray-200 p-4" style="height: 2000px">
        <a href="#" id="new-post-link" class="text-blue-500">New Link</a>
        <Visible when-hidden="#new-post-link">
            <button class="bg-blue-500 hover:bg-blue-600 rounded-full w-24 h-24 text-white text-4xl fixed z-10 bottom-3 right-3">+</button>
        </Visible>
    </div>
</div>
