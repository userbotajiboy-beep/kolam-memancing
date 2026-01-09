# 🎣 Kolam Memancing TV System

System leaderboard & music control untuk kolam memancing dengan slideshow display.

## 🚀 Quick Start

### Step 1: Setup Supabase (5 minit)

1. **Buka** https://supabase.com
2. **Sign up** atau login
3. **Create New Project**
   - Nama: `kolam-memancing`
   - Password: (pilih password)
   - Region: Southeast Asia (Singapore)
   - Tunggu 2-3 minit project setup

4. **Buka SQL Editor** (sidebar kiri)
5. **Copy & paste** SQL ni, then click RUN:

```sql
-- Create players table
CREATE TABLE players (
  id BIGSERIAL PRIMARY KEY,
  name TEXT NOT NULL,
  weight DECIMAL(5,2) NOT NULL,
  created_at TIMESTAMP WITH TIME ZONE DEFAULT NOW()
);

-- Create music control table
CREATE TABLE music_control (
  id BIGSERIAL PRIMARY KEY,
  video_id TEXT,
  playlist_id TEXT,
  playlist_mode BOOLEAN DEFAULT false,
  command TEXT,
  updated_at TIMESTAMP WITH TIME ZONE DEFAULT NOW()
);

-- Insert initial row
INSERT INTO music_control (id, video_id) VALUES (1, 'jNQXAC9IVRw');

-- Enable Row Level Security
ALTER TABLE players ENABLE ROW LEVEL SECURITY;
ALTER TABLE music_control ENABLE ROW LEVEL SECURITY;

-- Create policies
CREATE POLICY "Allow all on players" ON players FOR ALL USING (true) WITH CHECK (true);
CREATE POLICY "Allow all on music_control" ON music_control FOR ALL USING (true) WITH CHECK (true);

-- Create indexes
CREATE INDEX idx_players_weight ON players(weight DESC);
CREATE INDEX idx_music_updated ON music_control(updated_at DESC);
```

6. **Get API Keys**
   - Click ⚙️ Settings (sidebar bawah)
   - Click **API**
   - Copy:
     - `Project URL` (contoh: https://xxxxx.supabase.co)
     - `anon public` key (panjang, starts with eyJ...)

### Step 2: Update Config (1 minit)

1. **Buka file `config.js`**
2. **Replace** dengan credentials tadi:

```javascript
const SUPABASE_CONFIG = {
  url: 'https://xxxxx.supabase.co',  // ← Paste Project URL
  anonKey: 'eyJhbGc...'                // ← Paste anon key
};
```

3. **Save** file

### Step 3: Run! (0 minit)

**Cara 1: Double-click files** (Paling mudah)
- Double-click `tv.html` → Buka dalam browser
- Double-click `admin.html` → Buka dalam browser

**Cara 2: Guna Python server** (Kalau cara 1 tak jalan)
```bash
python3 -m http.server 8000
```
Then buka:
- TV: http://localhost:8000/tv.html
- Admin: http://localhost:8000/admin.html

**Cara 3: Guna VS Code Live Server**
- Install extension "Live Server"
- Right-click `tv.html` → Open with Live Server

---

## 📺 Cara Guna

### Admin Panel
1. Buka `admin.html`
2. **Tambah Pemenang**: Masukkan nama + berat
3. **Control Muzik**: 
   - Paste YouTube link untuk single video
   - Paste playlist link untuk playlist
   - Guna buttons untuk control (play/pause/next/previous)

### TV Display
1. Buka `tv.html` di TV/monitor
2. Click **START MUSIC** (sekali je)
3. System akan auto-rotate:
   - 30 saat: Leaderboard + small player
   - 30 saat: Fullscreen music player
   - Repeat...

---

## ✨ Features

- ✅ Real-time leaderboard updates
- ✅ YouTube music control (video & playlist)
- ✅ Auto slideshow rotation
- ✅ Cross-device sync (admin phone → TV screen)
- ✅ Modern Tailwind UI
- ✅ No server needed (pure web-based)
- ✅ Cloud database (Supabase)

---

## 🔧 Troubleshooting

### "Supabase is not defined"
- Pastikan internet connection okay
- Refresh page

### "Failed to fetch"
- Check `config.js` credentials betul ke tak
- Check Supabase project masih active

### Music tak auto-play
- Browser block autoplay - kena click START MUSIC dulu
- Check YouTube video/playlist link betul

### Cross-device tak sync
- Pastikan both devices guna credentials yang sama dalam `config.js`
- Check internet connection

---

## 📱 Deploy Online (Optional)

Nak host online supaya boleh access dari mana-mana?

### Deploy ke Netlify (FREE)
1. Push code ke GitHub
2. Buka https://netlify.com
3. Connect GitHub repo
4. Deploy!

### Deploy ke Vercel (FREE)
1. Push code ke GitHub
2. Buka https://vercel.com
3. Import project
4. Deploy!

**Note:** Jangan commit `config.js` dengan real credentials ke public repo! Guna environment variables.

---

## 📞 Support

Ada masalah? Check:
1. Browser console (F12) untuk error messages
2. Supabase dashboard untuk database issues
3. Network tab untuk API call issues

---

Made with ❤️ for Kolam Memancing
