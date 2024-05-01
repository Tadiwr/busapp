<div>
    <h1>This is the Admin page only logged in users can see it</h1>

    <form method="get" action="/logout">
        @csrf
        <button type="submit" class="my-button">Logout</button>
    </form>
</div>
