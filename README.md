# AL-connect 💼🧑‍🎓

AL-connect is a comprehensive alumni-student collaboration platform designed to facilitate mentorship, guidance, and real-world networking between college alumni and current students. Built with a secure and scalable PHP full-stack backend, the platform supports direct alumni interactions via LinkedIn, email, and contact options.

> 🚀 Live at: [https://alconnect.begetter.me](https://alconnect.begetter.me)

---

## 📌 Features

- 🧑‍🎓 Alumni-student mentorship system
- 🔗 Direct LinkedIn, email, and phone contact support
- 🔐 Secure authentication for both alumni and students
- 📄 Admin dashboard with approval controls
- 🔍 Smart profile search and filtering
- 📱 Fully responsive, mobile-friendly UI

---

## 🏗️ Tech Stack

### 🔹 Backend
- PHP (Core, no framework)
- MySQL
- Apache Server

### 🔹 Frontend
- HTML5, CSS3, JavaScript
- Bootstrap

---

## ☁️ Cloud & DevOps Skills Showcased

This project demonstrates modern **cloud deployment** and **DevOps** practices using Amazon Web Services (AWS).

### ✅ AWS Services Used

| Service | Purpose |
|--------|---------|
| **ECS (Fargate)** | Serverless container deployment for scalable app hosting |
| **ECR** | Secure container image storage |
| **ALB (Application Load Balancer)** | Public traffic management and HTTPS routing |
| **ACM (AWS Certificate Manager)** | SSL/TLS certificates for secure HTTPS |
| **Route 53 + External DNS (Namecheap)** | Custom subdomain (`alconnect.begetter.me`) routing |
| **CloudWatch** | Logs and monitoring |

### 🛠️ DevOps & Deployment Flow

- 🐳 Dockerized PHP Application
- 🛳️ Container pushed to AWS ECR
- ⚙️ Deployed to ECS with Fargate launch type (no EC2 management)
- 🔁 Connected to ALB (port 80 + 443 listeners)
- 🔐 HTTPS enabled with ACM certificates
- 🌐 Subdomain mapped via Namecheap to ALB DNS (A record)

---

## 🔐 Security Practices

- HTTPS enforced with redirect from HTTP
- ACM certificate validation and renewal
- ECS IAM roles with least privilege access
- No hardcoded credentials or exposed ports

---

## 🧪 Future Improvements

- Add CI/CD pipeline using GitHub Actions + ECS Blue/Green deployment
- Switch to Aurora MySQL or RDS for production-grade database hosting
- Enable CloudFront for faster global access

---

## 👨‍💻 Author

**Sai Vivek**  
B.Tech 2026 | Cloud and AI Enthusiast  
GitHub: [@saivivek-01](https://github.com/saivivek-01)  
Portfolio: [https://begetter.me](https://begetter.me)

---

## 📜 License

This project is licensed under the MIT License. See `LICENSE` for details.
