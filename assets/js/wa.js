function showBadge() {
                const badge = document.getElementById('wa-badge');
                if (!badge) return;
                badge.classList.remove('hidden');
                // fallback kalau utility 'hidden' tidak ada
                badge.style.display = 'inline-flex';
            }

            if (document.readyState === 'loading') {
                document.addEventListener('DOMContentLoaded', () => setTimeout(showBadge, 1200));
            } else {
                setTimeout(showBadge, 3000);
            }