{{-- Search box --}}
<div id="search-container">
    <div class="search-box">
        <form action="/">
            <input name="search" id="search" type="text" placeholder=" Search Anime...">
            <button type="submit" class="search-btn">
                <i class="fa-solid fa-magnifying-glass fa-xl"></i>
            </button>
        </form>
    </div>
</div>
{{-- Mobile Search icon --}}
<div class="icon">
    <div id="search-icon" onclick="displaySearch('show')">
        <i class="fa-solid fa-magnifying-glass fa-xl"></i>
    </div>
    <div id="close-icon" onclick="displaySearch('close')">
        <i class="fa-solid fa-xmark fa-xl"></i>
    </div>
</div>