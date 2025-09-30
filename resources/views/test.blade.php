<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Milestone and Activity Layout</title>
    <style>
       @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap");

:root {
  --color: #e6e6e6;
  --bgColor: rgba(24,28,36,0.95);
  --accent-color: #4f8cff;
  --highlight-bg: linear-gradient(90deg, #4f8cff 0%, #a084ee 100%);
  --highlight-shadow: 0 8px 32px 0 rgba(79,140,255,0.25);
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  background: linear-gradient(120deg, #181c24 0%, #23283b 100%);
  min-height: 100vh;
  display: grid;
  align-content: center;
  gap: 2rem;
  padding: 2rem;
  font-family: "Poppins", sans-serif;
  color: var(--color);
}

h1 {
  text-align: center;
  color: #fff;
  text-shadow: 0 2px 16px #0008;
  margin-bottom: 1.5rem;
}

.timeline-highlight {
  background: var(--highlight-bg);
  color: #fff;
  border-radius: 1.2rem;
  box-shadow: var(--highlight-shadow);
  padding: 2rem 2.5rem;
  margin: 0 auto 2rem auto;
  max-width: 600px;
  text-align: center;
  font-size: 1.25rem;
  font-weight: 600;
  letter-spacing: 0.01em;
  position: relative;
  overflow: hidden;
  animation: fadeInDown 1s;
}
.timeline-highlight::after {
  content: "💼";
  position: absolute;
  right: 2rem;
  top: 1.5rem;
  font-size: 2.5rem;
  opacity: 0.15;
  pointer-events: none;
}

@keyframes fadeInDown {
  from { opacity: 0; transform: translateY(-40px);}
  to { opacity: 1; transform: translateY(0);}
}

ul {
  --col-gap: 2rem;
  --row-gap: 2rem;
  --line-w: 0.25rem;
  display: grid;
  grid-template-columns: var(--line-w) 1fr;
  grid-auto-columns: max-content;
  column-gap: var(--col-gap);
  list-style: none;
  width: min(60rem, 90%);
  margin-inline: auto;
  animation: fadeIn 1.2s;
}

@keyframes fadeIn {
  from { opacity: 0;}
  to { opacity: 1;}
}

ul::before {
  content: "";
  grid-column: 1;
  grid-row: 1 / span 20;
  background: rgba(79,140,255,0.18);
  border-radius: calc(var(--line-w) / 2);
}

ul li:not(:last-child) {
  margin-bottom: var(--row-gap);
}

ul li {
  grid-column: 2;
  --inlineP: 1.5rem;
  margin-inline: var(--inlineP);
  grid-row: span 2;
  display: grid;
  grid-template-rows: min-content min-content min-content;
  background: rgba(40,44,60,0.55);
  border-radius: 1rem;
  box-shadow: 0 8px 32px 0 rgba(0,0,0,0.45);
  border: 1px solid rgba(255,255,255,0.08);
  backdrop-filter: blur(18px);
  -webkit-backdrop-filter: blur(18px);
  color: #e6e6e6;
  opacity: 0;
  transform: translateY(40px);
  animation: cardFadeIn 0.8s forwards;
}
ul li:nth-child(1) { animation-delay: 0.1s;}
ul li:nth-child(2) { animation-delay: 0.2s;}
ul li:nth-child(3) { animation-delay: 0.3s;}
ul li:nth-child(4) { animation-delay: 0.4s;}
ul li:nth-child(5) { animation-delay: 0.5s;}

@keyframes cardFadeIn {
  to { opacity: 1; transform: none;}
}

ul li:hover {
  box-shadow: 0 12px 36px 0 rgba(79,140,255,0.18);
  transform: scale(1.025) translateY(-2px);
  transition: all 0.3s cubic-bezier(.4,2,.3,1);
  border: 1.5px solid var(--accent-color);
}

ul li .date {
  --dateH: 3rem;
  height: var(--dateH);
  margin-inline: calc(var(--inlineP) * -1);
  text-align: center;
  background-color: var(--accent-color);
  color: white;
  font-size: 1.25rem;
  font-weight: 700;
  display: grid;
  place-content: center;
  position: relative;
  border-radius: calc(var(--dateH) / 2) 0 0 calc(var(--dateH) / 2);
  box-shadow: 0 2px 12px #0006;
  letter-spacing: 0.02em;
}

ul li .date::before {
  content: "";
  width: var(--inlineP);
  aspect-ratio: 1;
  background: var(--accent-color);
  background-image: linear-gradient(rgba(0, 0, 0, 0.2) 100%, transparent);
  position: absolute;
  top: 100%;
  clip-path: polygon(0 0, 100% 0, 0 100%);
  right: 0;
}

ul li .date::after {
  content: "";
  position: absolute;
  width: 2rem;
  aspect-ratio: 1;
  background: #23283b;
  border: 0.3rem solid var(--accent-color);
  border-radius: 50%;
  top: 50%;
  transform: translate(50%, -50%);
  right: calc(100% + var(--col-gap) + var(--line-w) / 2);
  box-shadow: 0 2px 8px #0006;
}

ul li .title,
ul li .descr {
  background: transparent;
  position: relative;
  padding-inline: 1.5rem;
  color: #e6e6e6;
}
ul li .title {
  overflow: hidden;
  padding-block-start: 1.5rem;
  padding-block-end: 1rem;
  font-weight: 500;
  font-size: 1.15rem;
  letter-spacing: 0.01em;
}
ul li .descr {
  padding-block-end: 1.5rem;
  font-weight: 300;
  font-size: 1rem;
  color: #bfc9e0;
}

ul li .title::before,
ul li .descr::before {
  content: "";
  position: absolute;
  width: 90%;
  height: 0.5rem;
  background: rgba(79,140,255,0.18);
  left: 50%;
  border-radius: 50%;
  filter: blur(4px);
  transform: translate(-50%, 50%);
}
ul li .title::before {
  bottom: calc(100% + 0.125rem);
}
ul li .descr::before {
  z-index: -1;
  bottom: 0.25rem;
}

@media (min-width: 40rem) {
  ul {
    grid-template-columns: 1fr var(--line-w) 1fr;
  }
  ul::before {
    grid-column: 2;
  }
  ul li:nth-child(odd) {
    grid-column: 1;
  }
  ul li:nth-child(even) {
    grid-column: 3;
  }
  ul li:nth-child(2) {
    grid-row: 2/4;
  }
  ul li:nth-child(odd) .date::before {
    clip-path: polygon(0 0, 100% 0, 100% 100%);
    left: 0;
  }
  ul li:nth-child(odd) .date::after {
    transform: translate(-50%, -50%);
    left: calc(100% + var(--col-gap) + var(--line-w) / 2);
  }
  ul li:nth-child(odd) .date {
    border-radius: 0 calc(var(--dateH) / 2) calc(var(--dateH) / 2) 0;
  }
}

.credits {
  margin-top: 1rem;
  text-align: right;
}
.credits a {
  color: #a084ee;
  text-decoration: none;
  transition: color 0.2s;
}
.credits a:hover {
  color: #fff;
  text-decoration: underline;
}
    </style>
</head>
<body>
<h1>Timeline & Activities</h1>
<div class="timeline-highlight">
    <span>🚀 <b>Accepting:</b> Full Time (CTC &gt; 20 Lakhs) &nbsp;|&nbsp; Freelance ₹800/hour</span>
</div>
<ul>
    <li style="--accent-color:#41516C">
        <div class="date">2002</div>
        <div class="title">Started Schooling</div>
        <div class="descr">Began my academic journey, building a strong foundation in science and mathematics.</div>
    </li>
    <li style="--accent-color:#FBCA3E">
        <div class="date">2007</div>
        <div class="title">First Computer</div>
        <div class="descr">Got my first computer, sparking a lifelong passion for technology and coding.</div>
    </li>
    <li style="--accent-color:#E24A68">
        <div class="date">2012</div>
        <div class="title">Early Coding</div>
        <div class="descr">Started learning programming basics and web development, building small projects for fun.</div>
    </li>
    <li style="--accent-color:#1B5F8C">
        <div class="date">2017</div>
        <div class="title">Engineering College</div>
        <div class="descr">Joined B.Tech in Computer Science, deepened my skills in software engineering and development.</div>
    </li>
    <li style="--accent-color:#4CADAD">
        <div class="date">2022</div>
        <div class="title">Professional Growth</div>
        <div class="descr">Working as a Software Engineer, delivering scalable solutions and leading impactful projects.</div>
    </li>
</ul>
<div class="credits"><a target="_blank" href="https://www.freepik.com/free-vector/infographic-template-with-yearly-info_1252895.htm">inspired by</a></div>
</body>
</html>
