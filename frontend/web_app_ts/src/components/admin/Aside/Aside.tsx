import React from 'react';
import AsideList from './AsideList';
import { useSidebar } from '../../../context/SidebarContext';

function Aside() {
  const { isCollapsed, toggleSidebar } = useSidebar();

  return (
    <div className={`
      md:static z-50
      transition-all duration-300 ease-in-out
      ${isCollapsed ? 'w-0 md:w-20 hidden' : 'w-64'} 
      h-screen bg-amber-50 border-2 m-2 rounded-2xl border-r border-gray-200
    `}>
      <div className='m-1 rounded bg-amber-50 flex items-center justify-center h-16'>
        <button
          onClick={toggleSidebar}
          className='flex items-center justify-center bg-amber-50 w-full h-16 gap-2 text-blue-500 hover:bg-blue-50 hover:text-blue-600'
        >
          {!isCollapsed && (
            <>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="size-6">
                <path strokeLinecap="round" strokeLinejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
              </svg>
              <p>Nhà sách nụ cười</p>
            </>
          )}
        </button>
      </div>

      {!isCollapsed && <AsideList />}
    </div>
  );
}

export default Aside;
