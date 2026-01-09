# 🚀 Deploy ke Server

System ni **pure web-based** - tak perlu Python/Node server!

## Option 1: Netlify (RECOMMENDED - Paling Mudah)

### Step 1: Push ke GitHub
```bash
git init
git add .
git commit -m "Initial commit"
git remote add origin https://github.com/YOUR_USERNAME/kolam-memancing.git
git push -u origin main
```

### Step 2: Deploy ke Netlify
1. Buka https://netlify.com
2. Sign up / Login
3. Click **"Add new site"** → **"Import an existing project"**
4. Connect GitHub
5. Select repo `kolam-memancing`
6. Click **"Deploy site"**

**Done!** Dapat URL: `https://your-site.netlify.app`

---

## Option 2: Vercel (Alternative)

### Step 1: Push ke GitHub (sama macam atas)

### Step 2: Deploy ke Vercel
1. Buka https://vercel.com
2. Sign up / Login
3. Click **"Add New"** → **"Project"**
4. Import GitHub repo
5. Click **"Deploy"**

**Done!** Dapat URL: `https://your-site.vercel.app`

---

## Option 3: GitHub Pages (FREE)

### Step 1: Push ke GitHub

### Step 2: Enable GitHub Pages
1. Buka repo settings
2. Pages → Source → **main branch**
3. Save

**Done!** URL: `https://YOUR_USERNAME.github.io/kolam-memancing`

---

## Option 4: Shared Hosting (cPanel)

Kalau ada shared hosting (Hostinger, Niagahoster, etc):

1. **Upload files** via FTP/File Manager:
   - `tv.html`
   - `admin.html`
   - `test-supabase.html`
   - `README.md`

2. **Access**:
   - TV: `https://yourdomain.com/tv.html`
   - Admin: `https://yourdomain.com/admin.html`

---

## Files Yang Perlu Upload

✅ **PERLU:**
- `tv.html`
- `admin.html`
- `README.md`
- `DEPLOY.md`

❌ **TAK PERLU:**
- `server.py` (not used anymore)
- `config.js` (credentials dah inline dalam HTML)
- `leaderboard.db` (guna Supabase cloud)
- `current.txt` (not used)
- `node_modules/` (kalau ada)

---

## Security Note

⚠️ **PENTING:** Credentials Supabase dah hardcoded dalam HTML files.

Untuk production, better practice:
1. Guna environment variables
2. Atau setup Supabase Edge Functions
3. Atau guna Netlify/Vercel environment variables

**Tapi untuk demo/internal use, current setup okay je!**

---

## Custom Domain (Optional)

Lepas deploy, boleh add custom domain:

### Netlify:
1. Site settings → Domain management
2. Add custom domain
3. Update DNS records

### Vercel:
1. Project settings → Domains
2. Add domain
3. Update DNS records

---

## Testing After Deploy

1. **Buka TV URL** - Check leaderboard load
2. **Buka Admin URL** - Add player
3. **Check TV** - Player patut appear real-time
4. **Test music control** - Paste YouTube link

---

## Troubleshooting

### "Supabase not initialized"
- Check browser console
- Verify Supabase credentials betul
- Check internet connection

### "CORS error"
- Shouldn't happen sebab guna Supabase (already CORS-enabled)
- If happens, check Supabase project settings

### "Data not syncing"
- Check Supabase tables created
- Check RLS policies enabled
- Verify both devices guna same Supabase project

---

## Cost

- ✅ **Netlify/Vercel**: FREE (unlimited bandwidth)
- ✅ **GitHub Pages**: FREE
- ✅ **Supabase**: FREE tier (500MB database, 2GB bandwidth)

**Total cost: RM 0 / month** 🎉

---

## Recommended Setup

**Best combo:**
- **Hosting**: Netlify (fastest, easiest)
- **Database**: Supabase (free tier cukup)
- **Domain**: Netlify subdomain (free) atau custom domain

**Deploy time: 5 minit je!**
