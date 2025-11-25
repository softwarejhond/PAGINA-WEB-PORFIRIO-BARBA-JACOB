<!-- Herramienta Flotante de Accesibilidad -->
<div id="accessibility-toolbar" class="accessibility-toolbar">
    <button id="accessibility-toggle" class="accessibility-toggle" aria-label="Abrir herramientas de accesibilidad">
        <i class="fas fa-universal-access"></i>
    </button>
    
    <div id="accessibility-panel" class="accessibility-panel">
        <div class="accessibility-header">
            <h3>Herramientas de Accesibilidad</h3>
            <button id="close-accessibility" class="close-btn" aria-label="Cerrar">
                <i class="fas fa-times"></i>
            </button>
        </div>
        
        <div class="accessibility-content">
            <!-- Control de Tamaño de Texto -->
            <div class="accessibility-section">
                <h4><i class="fas fa-text-height"></i> Tamaño de Texto</h4>
                <div class="btn-group">
                    <button id="decrease-text" class="acc-btn" title="Disminuir texto">
                        <i class="fas fa-minus"></i> A-
                    </button>
                    <button id="reset-text" class="acc-btn" title="Restablecer texto">
                        <i class="fas fa-redo"></i> A
                    </button>
                    <button id="increase-text" class="acc-btn" title="Aumentar texto">
                        <i class="fas fa-plus"></i> A+
                    </button>
                </div>
            </div>

            <!-- Control de Contraste -->
            <div class="accessibility-section">
                <h4><i class="fas fa-adjust"></i> Contraste</h4>
                <div class="btn-group">
                    <button id="high-contrast" class="acc-btn" title="Alto contraste">
                        <i class="fas fa-circle-half-stroke"></i> Alto Contraste
                    </button>
                    <button id="invert-colors" class="acc-btn" title="Invertir colores">
                        <i class="fas fa-palette"></i> Invertir Colores
                    </button>
                </div>
            </div>

            <!-- Lector de Pantalla -->
            <div class="accessibility-section">
                <h4><i class="fas fa-volume-up"></i> Lector de Pantalla</h4>
                <div class="btn-group-vertical">
                    <button id="toggle-reader" class="acc-btn acc-btn-primary" title="Activar/Desactivar lector">
                        <i class="fas fa-play"></i> Activar Lector
                    </button>
                    <button id="read-selection" class="acc-btn" title="Leer selección">
                        <i class="fas fa-mouse-pointer"></i> Leer Selección
                    </button>
                    <button id="stop-reading" class="acc-btn" title="Detener lectura">
                        <i class="fas fa-stop"></i> Detener
                    </button>
                </div>
                <div class="volume-control">
                    <label for="reader-speed">Velocidad:</label>
                    <input type="range" id="reader-speed" min="0.5" max="2" step="0.1" value="1">
                    <span id="speed-value">1x</span>
                </div>
            </div>

            <!-- Espaciado y Lectura -->
            <div class="accessibility-section">
                <h4><i class="fas fa-align-left"></i> Formato</h4>
                <div class="btn-group-vertical">
                    <button id="line-spacing" class="acc-btn" title="Aumentar espaciado entre líneas">
                        <i class="fas fa-grip-lines"></i> Espaciado de Línea
                    </button>
                    <button id="letter-spacing" class="acc-btn" title="Aumentar espaciado entre letras">
                        <i class="fas fa-text-width"></i> Espaciado de Letra
                    </button>
                    <button id="dyslexia-font" class="acc-btn" title="Fuente para dislexia">
                        <i class="fas fa-font"></i> Fuente Dislexia
                    </button>
                </div>
            </div>

            <!-- Navegación -->
            <div class="accessibility-section">
                <h4><i class="fas fa-keyboard"></i> Navegación</h4>
                <div class="btn-group-vertical">
                    <button id="highlight-links" class="acc-btn" title="Resaltar enlaces">
                        <i class="fas fa-link"></i> Resaltar Enlaces
                    </button>
                    <button id="highlight-headings" class="acc-btn" title="Resaltar títulos">
                        <i class="fas fa-heading"></i> Resaltar Títulos
                    </button>
                    <button id="reading-guide" class="acc-btn" title="Guía de lectura">
                        <i class="fas fa-ruler-horizontal"></i> Guía de Lectura
                    </button>
                </div>
            </div>

            <!-- Cursor -->
            <div class="accessibility-section">
                <h4><i class="fas fa-mouse-pointer"></i> Cursor</h4>
                <div class="btn-group">
                    <button id="big-cursor" class="acc-btn" title="Cursor grande">
                        <i class="fas fa-arrow-pointer"></i> Cursor Grande
                    </button>
                    <button id="reading-mask" class="acc-btn" title="Máscara de lectura">
                        <i class="fas fa-eye"></i> Máscara
                    </button>
                </div>
            </div>

            <!-- Restablecer Todo -->
            <div class="accessibility-section">
                <button id="reset-all" class="acc-btn acc-btn-danger" title="Restablecer todas las opciones">
                    <i class="fas fa-undo"></i> Restablecer Todo
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Guía de lectura (línea horizontal) -->
<div id="reading-guide-line" class="reading-guide-line"></div>

<!-- Máscara de lectura -->
<div id="reading-mask-overlay" class="reading-mask-overlay">
    <div class="reading-mask-window"></div>
</div>

<style>
/* Estilos de la barra de herramientas de accesibilidad */
.accessibility-toolbar {
    position: fixed;
    right: 20px;
    top: 50%;
    transform: translateY(-50%);
    z-index: 9999;
}

.accessibility-toggle {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border: none;
    color: white;
    font-size: 24px;
    cursor: pointer;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
}

.accessibility-toggle:hover {
    transform: scale(1.1);
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.4);
}

.accessibility-panel {
    position: absolute;
    bottom: auto;
    top: 50%;
    transform: translateY(-50%);
    right: 80px;
    width: 350px;
    max-height: 90vh;
    background: white;
    border-radius: 15px;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
    display: none;
    flex-direction: column;
    overflow: hidden;
}

.accessibility-panel.active {
    display: flex;
    animation: slideUp 0.3s ease;
}

@keyframes slideUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.accessibility-header {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 15px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.accessibility-header h3 {
    margin: 0;
    font-size: 18px;
    font-weight: 600;
}

.close-btn {
    background: transparent;
    border: none;
    color: white;
    font-size: 20px;
    cursor: pointer;
    padding: 5px;
    transition: transform 0.2s;
}

.close-btn:hover {
    transform: rotate(90deg);
}

.accessibility-content {
    padding: 20px;
    overflow-y: auto;
    max-height: calc(90vh - 60px);
}

.accessibility-section {
    margin-bottom: 20px;
    padding-bottom: 20px;
    border-bottom: 1px solid #e0e0e0;
}

.accessibility-section:last-child {
    border-bottom: none;
    padding-bottom: 0;
}

.accessibility-section h4 {
    font-size: 14px;
    font-weight: 600;
    color: #333;
    margin-bottom: 10px;
    display: flex;
    align-items: center;
    gap: 8px;
}

.btn-group {
    display: flex;
    gap: 8px;
    flex-wrap: wrap;
}

.btn-group-vertical {
    display: flex;
    flex-direction: column;
    gap: 8px;
}

.acc-btn {
    padding: 10px 15px;
    border: 2px solid #e0e0e0;
    background: white;
    border-radius: 8px;
    cursor: pointer;
    font-size: 13px;
    transition: all 0.2s;
    display: flex;
    align-items: center;
    gap: 6px;
    flex: 1;
    min-width: fit-content;
}

.acc-btn:hover {
    background: #f5f5f5;
    border-color: #667eea;
    transform: translateY(-2px);
}

.acc-btn.active {
    background: #667eea;
    color: white;
    border-color: #667eea;
}

.acc-btn-primary {
    background: #667eea;
    color: white;
    border-color: #667eea;
}

.acc-btn-primary:hover {
    background: #5568d3;
}

.acc-btn-danger {
    background: #ef4444;
    color: white;
    border-color: #ef4444;
    width: 100%;
}

.acc-btn-danger:hover {
    background: #dc2626;
}

.volume-control {
    margin-top: 10px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.volume-control label {
    font-size: 12px;
    color: #666;
}

.volume-control input[type="range"] {
    flex: 1;
}

#speed-value {
    font-size: 12px;
    font-weight: 600;
    color: #667eea;
    min-width: 30px;
}

/* Efectos de accesibilidad */
.high-contrast-mode {
    filter: contrast(1.5) !important;
}

.inverted-colors {
    filter: invert(1) hue-rotate(180deg) !important;
}

.big-cursor,
.big-cursor * {
    cursor: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><path d="M2 2 L2 26 L10 18 L14 28 L18 26 L14 16 L24 16 Z" fill="black" stroke="white" stroke-width="2"/></svg>') 0 0, auto !important;
}

.dyslexia-font * {
    font-family: 'OpenDyslexic', Arial, sans-serif !important;
}

.increased-line-spacing * {
    line-height: 2 !important;
}

.increased-letter-spacing * {
    letter-spacing: 0.12em !important;
}

.highlight-links a {
    background: yellow !important;
    padding: 2px 4px !important;
    border-radius: 3px !important;
}

.highlight-headings h1,
.highlight-headings h2,
.highlight-headings h3,
.highlight-headings h4,
.highlight-headings h5,
.highlight-headings h6 {
    background: #ffeb3b !important;
    padding: 5px !important;
    border-left: 4px solid #ff9800 !important;
}

/* Guía de lectura */
.reading-guide-line {
    position: fixed;
    left: 0;
    width: 100%;
    height: 3px;
    background: rgba(255, 0, 0, 0.6);
    pointer-events: none;
    z-index: 9998;
    display: none;
    box-shadow: 0 0 10px rgba(255, 0, 0, 0.5);
}

.reading-guide-line.active {
    display: block;
}

/* Máscara de lectura */
.reading-mask-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
    z-index: 9997;
    display: none;
}

.reading-mask-overlay.active {
    display: block;
}

.reading-mask-overlay::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.7);
}

.reading-mask-window {
    position: absolute;
    left: 0;
    width: 100%;
    height: 100px;
    box-shadow: 0 0 0 9999px rgba(0, 0, 0, 0.7);
    pointer-events: none;
}

/* Tamaños de texto */
body.text-size-1 {
    font-size: 14px;
}

body.text-size-2 {
    font-size: 16px;
}

body.text-size-3 {
    font-size: 18px;
}

body.text-size-4 {
    font-size: 20px;
}

body.text-size-5 {
    font-size: 22px;
}

/* Responsive */
@media (max-width: 768px) {
    .accessibility-toolbar {
        right: 10px;
        top: 50%;
    }
    
    .accessibility-panel {
        width: calc(100vw - 40px);
        right: -10px;
        left: auto;
    }
    
    .accessibility-toggle {
        width: 50px;
        height: 50px;
        font-size: 20px;
    }
}

/* Scrollbar personalizado para el panel */
.accessibility-content::-webkit-scrollbar {
    width: 8px;
}

.accessibility-content::-webkit-scrollbar-track {
    background: #f1f1f1;
    border-radius: 10px;
}

.accessibility-content::-webkit-scrollbar-thumb {
    background: #667eea;
    border-radius: 10px;
}

.accessibility-content::-webkit-scrollbar-thumb:hover {
    background: #5568d3;
}
</style>

<script>
// JavaScript para las herramientas de accesibilidad
(function() {
    'use strict';
    
    // Variables de estado
    let textSize = 2; // Tamaño por defecto (16px)
    let readerActive = false;
    let readerSpeed = 1;
    let speechSynthesis = window.speechSynthesis;
    let currentUtterance = null;
    
    // Elementos del DOM
    const toggle = document.getElementById('accessibility-toggle');
    const panel = document.getElementById('accessibility-panel');
    const closeBtn = document.getElementById('close-accessibility');
    const readingGuideLine = document.getElementById('reading-guide-line');
    const readingMask = document.getElementById('reading-mask-overlay');
    
    // Toggle del panel
    toggle.addEventListener('click', () => {
        panel.classList.toggle('active');
    });
    
    closeBtn.addEventListener('click', () => {
        panel.classList.remove('active');
    });
    
    // Cerrar al hacer clic fuera
    document.addEventListener('click', (e) => {
        if (!panel.contains(e.target) && !toggle.contains(e.target)) {
            panel.classList.remove('active');
        }
    });
    
    // TAMAÑO DE TEXTO
    document.getElementById('increase-text').addEventListener('click', () => {
        if (textSize < 5) {
            textSize++;
            updateTextSize();
        }
    });
    
    document.getElementById('decrease-text').addEventListener('click', () => {
        if (textSize > 1) {
            textSize--;
            updateTextSize();
        }
    });
    
    document.getElementById('reset-text').addEventListener('click', () => {
        textSize = 2;
        updateTextSize();
    });
    
    function updateTextSize() {
        document.body.className = document.body.className.replace(/text-size-\d/g, '');
        document.body.classList.add('text-size-' + textSize);
        localStorage.setItem('accessibility-text-size', textSize);
    }
    
    // CONTRASTE
    document.getElementById('high-contrast').addEventListener('click', function() {
        document.body.classList.toggle('high-contrast-mode');
        this.classList.toggle('active');
        saveState('highContrast', this.classList.contains('active'));
    });
    
    document.getElementById('invert-colors').addEventListener('click', function() {
        document.body.classList.toggle('inverted-colors');
        this.classList.toggle('active');
        saveState('invertColors', this.classList.contains('active'));
    });
    
    // LECTOR DE PANTALLA
    document.getElementById('toggle-reader').addEventListener('click', function() {
        readerActive = !readerActive;
        this.classList.toggle('active');
        
        if (readerActive) {
            this.innerHTML = '<i class="fas fa-pause"></i> Desactivar Lector';
            enableReader();
        } else {
            this.innerHTML = '<i class="fas fa-play"></i> Activar Lector';
            disableReader();
        }
    });
    
    document.getElementById('read-selection').addEventListener('click', () => {
        const selectedText = window.getSelection().toString();
        if (selectedText) {
            speakText(selectedText);
        } else {
            speakText('Por favor, selecciona un texto para leer');
        }
    });
    
    document.getElementById('stop-reading').addEventListener('click', () => {
        stopSpeaking();
    });
    
    document.getElementById('reader-speed').addEventListener('input', function() {
        readerSpeed = parseFloat(this.value);
        document.getElementById('speed-value').textContent = readerSpeed.toFixed(1) + 'x';
        localStorage.setItem('accessibility-reader-speed', readerSpeed);
    });
    
    function enableReader() {
        document.addEventListener('click', handleReaderClick);
        speakText('Lector de pantalla activado. Haz clic en cualquier elemento para escuchar su contenido');
    }
    
    function disableReader() {
        document.removeEventListener('click', handleReaderClick);
        stopSpeaking();
    }
    
    function handleReaderClick(e) {
        if (!panel.contains(e.target)) {
            e.preventDefault();
            const element = e.target;
            const text = element.innerText || element.alt || element.title || 'Elemento sin texto';
            speakText(text);
        }
    }
    
    function speakText(text) {
        stopSpeaking();
        
        if ('speechSynthesis' in window) {
            currentUtterance = new SpeechSynthesisUtterance(text);
            currentUtterance.lang = 'es-ES';
            currentUtterance.rate = readerSpeed;
            currentUtterance.pitch = 1;
            currentUtterance.volume = 1;
            
            speechSynthesis.speak(currentUtterance);
        } else {
            alert('Tu navegador no soporta la síntesis de voz');
        }
    }
    
    function stopSpeaking() {
        if (speechSynthesis.speaking) {
            speechSynthesis.cancel();
        }
    }
    
    // FORMATO
    document.getElementById('line-spacing').addEventListener('click', function() {
        document.body.classList.toggle('increased-line-spacing');
        this.classList.toggle('active');
        saveState('lineSpacing', this.classList.contains('active'));
    });
    
    document.getElementById('letter-spacing').addEventListener('click', function() {
        document.body.classList.toggle('increased-letter-spacing');
        this.classList.toggle('active');
        saveState('letterSpacing', this.classList.contains('active'));
    });
    
    document.getElementById('dyslexia-font').addEventListener('click', function() {
        document.body.classList.toggle('dyslexia-font');
        this.classList.toggle('active');
        saveState('dyslexiaFont', this.classList.contains('active'));
    });
    
    // NAVEGACIÓN
    document.getElementById('highlight-links').addEventListener('click', function() {
        document.body.classList.toggle('highlight-links');
        this.classList.toggle('active');
        saveState('highlightLinks', this.classList.contains('active'));
    });
    
    document.getElementById('highlight-headings').addEventListener('click', function() {
        document.body.classList.toggle('highlight-headings');
        this.classList.toggle('active');
        saveState('highlightHeadings', this.classList.contains('active'));
    });
    
    document.getElementById('reading-guide').addEventListener('click', function() {
        readingGuideLine.classList.toggle('active');
        this.classList.toggle('active');
        saveState('readingGuide', this.classList.contains('active'));
    });
    
    // Mover la guía de lectura con el mouse
    document.addEventListener('mousemove', (e) => {
        if (readingGuideLine.classList.contains('active')) {
            readingGuideLine.style.top = e.clientY + 'px';
        }
    });
    
    // CURSOR
    document.getElementById('big-cursor').addEventListener('click', function() {
        document.body.classList.toggle('big-cursor');
        this.classList.toggle('active');
        saveState('bigCursor', this.classList.contains('active'));
    });
    
    document.getElementById('reading-mask').addEventListener('click', function() {
        readingMask.classList.toggle('active');
        this.classList.toggle('active');
        saveState('readingMask', this.classList.contains('active'));
    });
    
    // Mover la máscara de lectura con el mouse
    document.addEventListener('mousemove', (e) => {
        if (readingMask.classList.contains('active')) {
            const maskWindow = readingMask.querySelector('.reading-mask-window');
            maskWindow.style.top = (e.clientY - 50) + 'px';
        }
    });
    
    // RESTABLECER TODO
    document.getElementById('reset-all').addEventListener('click', () => {
        // Remover todas las clases
        document.body.className = '';
        readingGuideLine.classList.remove('active');
        readingMask.classList.remove('active');
        
        // Desactivar lector
        readerActive = false;
        stopSpeaking();
        
        // Resetear tamaño de texto
        textSize = 2;
        updateTextSize();
        
        // Resetear velocidad de lectura
        readerSpeed = 1;
        document.getElementById('reader-speed').value = 1;
        document.getElementById('speed-value').textContent = '1x';
        
        // Desactivar todos los botones
        document.querySelectorAll('.acc-btn.active').forEach(btn => {
            btn.classList.remove('active');
        });
        
        document.getElementById('toggle-reader').innerHTML = '<i class="fas fa-play"></i> Activar Lector';
        
        // Limpiar localStorage
        localStorage.clear();
        
        speakText('Todas las opciones de accesibilidad han sido restablecidas');
    });
    
    // Guardar y cargar estado
    function saveState(key, value) {
        localStorage.setItem('accessibility-' + key, value);
    }
    
    function loadState() {
        // Cargar tamaño de texto
        const savedTextSize = localStorage.getItem('accessibility-text-size');
        if (savedTextSize) {
            textSize = parseInt(savedTextSize);
            updateTextSize();
        }
        
        // Cargar velocidad de lectura
        const savedSpeed = localStorage.getItem('accessibility-reader-speed');
        if (savedSpeed) {
            readerSpeed = parseFloat(savedSpeed);
            document.getElementById('reader-speed').value = readerSpeed;
            document.getElementById('speed-value').textContent = readerSpeed.toFixed(1) + 'x';
        }
        
        // Cargar otras configuraciones
        const states = {
            'highContrast': 'high-contrast-mode',
            'invertColors': 'inverted-colors',
            'lineSpacing': 'increased-line-spacing',
            'letterSpacing': 'increased-letter-spacing',
            'dyslexiaFont': 'dyslexia-font',
            'highlightLinks': 'highlight-links',
            'highlightHeadings': 'highlight-headings',
            'bigCursor': 'big-cursor'
        };
        
        for (let [key, className] of Object.entries(states)) {
            if (localStorage.getItem('accessibility-' + key) === 'true') {
                document.body.classList.add(className);
                const btn = document.querySelector(`[id*="${key.replace(/([A-Z])/g, '-$1').toLowerCase()}"]`);
                if (btn) btn.classList.add('active');
            }
        }
        
        // Cargar guía de lectura
        if (localStorage.getItem('accessibility-readingGuide') === 'true') {
            readingGuideLine.classList.add('active');
            document.getElementById('reading-guide').classList.add('active');
        }
        
        // Cargar máscara de lectura
        if (localStorage.getItem('accessibility-readingMask') === 'true') {
            readingMask.classList.add('active');
            document.getElementById('reading-mask').classList.add('active');
        }
    }
    
    // Cargar estado al iniciar
    loadState();
    
    // Atajos de teclado
    document.addEventListener('keydown', (e) => {
        // Alt + A: Abrir/cerrar panel
        if (e.altKey && e.key === 'a') {
            e.preventDefault();
            panel.classList.toggle('active');
        }
        
        // Alt + +: Aumentar texto
        if (e.altKey && e.key === '+') {
            e.preventDefault();
            document.getElementById('increase-text').click();
        }
        
        // Alt + -: Disminuir texto
        if (e.altKey && e.key === '-') {
            e.preventDefault();
            document.getElementById('decrease-text').click();
        }
        
        // Alt + R: Leer selección
        if (e.altKey && e.key === 'r') {
            e.preventDefault();
            document.getElementById('read-selection').click();
        }
        
        // Alt + S: Detener lectura
        if (e.altKey && e.key === 's') {
            e.preventDefault();
            stopSpeaking();
        }
    });
    
})();
</script>
