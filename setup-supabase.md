# Setup Supabase

## 1. Create Supabase Account
- Go to https://supabase.com
- Sign up / Login
- Create new project

## 2. Create Tables
Run this SQL in Supabase SQL Editor:

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
  refresh_tv BOOLEAN DEFAULT false,
  manual_playlist JSONB,
  updated_at TIMESTAMP WITH TIME ZONE DEFAULT NOW()
);

-- Insert initial row for music control
INSERT INTO music_control (id, video_id) VALUES (1, 'jNQXAC9IVRw');

-- Enable Row Level Security
ALTER TABLE players ENABLE ROW LEVEL SECURITY;
ALTER TABLE music_control ENABLE ROW LEVEL SECURITY;

-- Create policies to allow all operations (for demo)
CREATE POLICY "Allow all operations on players" ON players
  FOR ALL
  USING (true)
  WITH CHECK (true);

CREATE POLICY "Allow all operations on music_control" ON music_control
  FOR ALL
  USING (true)
  WITH CHECK (true);

-- Create indexes for faster queries
CREATE INDEX idx_players_weight ON players(weight DESC);
CREATE INDEX idx_music_updated ON music_control(updated_at DESC);
```

## 3. Get API Credentials
- Go to Project Settings > API
- Copy:
  - Project URL
  - anon/public key

## 4. Update config.js
Replace `YOUR_SUPABASE_URL` and `YOUR_SUPABASE_ANON_KEY` with your credentials

## 5. Open Files
Just open `tv.html` and `admin.html` directly in browser - no server needed!

## Benefits
- ✅ Cross-device control (admin phone → TV screen)
- ✅ Multiple TVs can sync to same music
- ✅ Real-time updates
- ✅ No localStorage limitations
