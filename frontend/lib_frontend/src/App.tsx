import { RouterProvider } from 'react-router-dom'
import './App.css'
import UserRoutes from './routes/UserRoutes'

function App() {

  return (
    <>
      <RouterProvider router={UserRoutes} />
    </>
  )
}

export default App
