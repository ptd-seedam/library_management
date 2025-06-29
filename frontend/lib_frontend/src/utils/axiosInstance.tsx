// axiosInstance.ts
import axios from 'axios';

const instance = axios.create({
  baseURL: 'http://localhost:8000/api/user',
});

instance.interceptors.request.use(
  config => {
    const token = localStorage.getItem('authToken');
    if (token) {
      config.headers.Authorization = `Bearer ${token}`;
    }
    return config;
  },
  error => Promise.reject(error)
);

export default instance;
