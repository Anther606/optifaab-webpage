document.addEventListener('click', (e) => {
  const a = e.target.closest('a[href^="#"]')
  if (!a) return
  const el = document.querySelector(a.getAttribute('href'))
  if (!el) return
  e.preventDefault()
  el.scrollIntoView({ behavior: 'smooth', block: 'start' })
})

// Drawer (hamburger) bez dropdowna — slide-in s lijeve
const drawer = document.getElementById('mobileDrawer')
const backdrop = document.getElementById('backdrop')
const openBtn = document.getElementById('openDrawer')
const closeBtn = document.getElementById('closeDrawer')

function openDrawer() {
  drawer.classList.remove('-translate-x-full')
  backdrop.classList.remove('pointer-events-none')
  backdrop.classList.add('opacity-100')
  document.documentElement.classList.add('overflow-hidden') // lock scroll
}
function closeDrawer() {
  drawer.classList.add('-translate-x-full')
  backdrop.classList.add('pointer-events-none')
  backdrop.classList.remove('opacity-100')
  document.documentElement.classList.remove('overflow-hidden')
}

openBtn?.addEventListener('click', openDrawer)
closeBtn?.addEventListener('click', closeDrawer)
backdrop?.addEventListener('click', closeDrawer)
window.addEventListener('keydown', (e) => { if (e.key === 'Escape') closeDrawer() })

// (ostavi tvoj smooth scroll ako ga već imaš)
