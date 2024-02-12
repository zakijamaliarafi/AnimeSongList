<div class="logout-container">
    <form method="POST" action="/dashboard/logout">
        @csrf
        <button type="submit" class="logout-btn">
            <i class="fa-solid fa-right-from-bracket fa-xl"></i><span id="logout-text"> Logout</span>
        </button>
    </form>
</div>
