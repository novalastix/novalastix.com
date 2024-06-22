//Navbar Controls
document.querySelector('.nav-btn').addEventListener('click',function()
{
    document.querySelectorAll("nav").forEach(n => n.classList.toggle('expand'));
    document.querySelectorAll(".nav-collapse").forEach(n => n.classList.toggle('hidden'));
});
