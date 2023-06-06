<script>
import "../app.css"

let navItems = [
    {
        name: "Main",
        uri: "https://tuna2134.jp"
    },
    {
        name: "GitHub",
        uri: "https://github.com/tuna2134"
    }
]
</script>
<header class="flex border-b">
    <div class="px-2 w-full max-w-5xl mx-auto items-center flex h-16">
        <h1 class="flex text-3xl font-bold">
            <a href="/">tuna2134.dev</a>
        </h1>
        <nav class="flex ml-auto space-x-6">
            {#each navItems as navItem}
            <a href={navItem.uri}>{navItem.name}</a>
            {/each}
        </nav>
    </div>
</header>
<slot />
<style lang="postcss"></style>