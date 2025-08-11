# PearlMotion – Motion Customizer for Ender Pearls

PearlMotion is a PocketMine-MP 5.x plugin that lets you customize the **motion speed** of thrown ender pearls on each axis (X, Y, Z).

---

## To the reviewer
- Please unban me from the pocketmine discord
- I repent my actions.
- @trix.pro

---

## 📦 Features
- Change ender pearl throw speed per axis.
- Simple configuration file.
- Lightweight and optimized.

---

## ⚙️ Configuration
`config.yml`:
```yaml
# Adjust the motion axis values (float)
pearl-motion:
  x: 1.4
  y: 1.4
  z: 1.4
```
- **x** → Horizontal motion (left/right)
- **y** → Vertical motion (up/down)
- **z** → Horizontal motion (forward/backward)  

Values must be **floats**.  
For example: `1.0` = default speed, `2.0` = double speed, `0.5` = half speed.

---

## 📥 Installation
1. Place the plugin `.phar` file into your server’s `plugins/` folder.
2. Start the server to generate `config.yml`.
3. Edit `config.yml` to your liking.
4. Restart the server.

---

## 🚀 How it Works
Whenever a player throws an ender pearl:
1. The plugin intercepts the launch event.
2. It multiplies the pearl's motion by your configured values.
3. The pearl travels faster or slower depending on your settings.

---

## 🛠 Requirements
- PocketMine-MP **5.x**
- PHP **8.1+**

---
