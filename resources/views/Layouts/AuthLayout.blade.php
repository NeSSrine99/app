<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Auth')</title>
    <link rel="stylesheet" href="{{ asset('assets/styles/tailwind.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}">
</head>
<body class="text-blueGray-700 antialiased">

    @yield('content') 

<script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
<script>
function toggleNavbar(collapseID){
    document.getElementById(collapseID).classList.toggle("hidden");
    document.getElementById(collapseID).classList.toggle("block");
}
function openDropdown(event, dropdownID){
    let element = event.target;
    while(element.nodeName !== "A") element = element.parentNode;
    Popper.createPopper(element, document.getElementById(dropdownID), {placement:"bottom-start"});
    document.getElementById(dropdownID).classList.toggle("hidden");
    document.getElementById(dropdownID).classList.toggle("block");
}
</script>

</body>
</html>