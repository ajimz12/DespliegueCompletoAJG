import { useEffect, useState } from "react";
import "./App.css";
function App() {
  const [message, setMessage] = useState("");
  useEffect(() => {
    fetch("/api/ajg")
      .then((res) => res.json())
      .then((data) => setMessage(data.message));
  }, []);
  return (
    <div>
      <h1>Frontend en React de Alvaro Jimenez</h1>
      <p>
        Esta aplicación se conecta al backend de Symfony pidiéndole una
        respuesta
      </p>
      <p>respuesta del Backend: {message || "¡Hola!, espera a que se inicie el backend..."}</p>
    </div>
  );
}
export default App;
