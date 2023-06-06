<script>
    let libItems = [
        {
            name: "voicevox-client",
            uri: "https://github.com/voicevox-client"
        },
        {
            name: "sanic-discord",
            uri: "https://github.com/tuna2134/sanic-discord"
        }
    ]
</script>

<main class="px-2 w-full max-w-7xl mx-auto mt-4">
    <div class="py-4">
        <h2 class="text-2xl font-semibold">Library</h2>
        <ul>
            {#each libItems as libItem}
            <li class="list-inside list-disc">
                <a href={libItem.uri}>{libItem.name}</a>
            </li>
            {/each}
        </ul>
    </div>
</main>