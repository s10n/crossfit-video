import React from 'react'
import ReactDOM from 'react-dom'
import { Provider } from 'react-redux'
import Raven from 'raven-js'
import store from './store'
import types from './constants/types'
import { auth } from './constants/api'
import App from './containers/App'

process.env.REACT_APP_ENV === 'production' &&
  Raven.config('https://0a197301bcf64a18af8898259afc56d2@sentry.io/200654').install()

auth().onAuthStateChanged(user => {
  user
    ? store.dispatch({ type: types.AUTH_USER, user })
    : store.dispatch({ type: types.UNAUTH_USER })

  ReactDOM.render(
    <Provider store={store}>
      <App />
    </Provider>,
    document.getElementById('app')
  )
})
