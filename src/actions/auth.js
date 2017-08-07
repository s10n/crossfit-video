import { push } from 'react-router-redux'
import { auth } from '../constants/api'
import types from '../constants/types'

export function signupUser({ email, password }) {
  return dispatch => {
    auth()
      .createUserWithEmailAndPassword(email, password)
      .then(user => {
        dispatch({ type: types.AUTH_USER, user })
        dispatch(push('/'))
      })
      .catch(error => {
        dispatch(authError(error.message))
      })
  }
}

export function signinUser({ email, password }) {
  return dispatch => {
    auth()
      .signInWithEmailAndPassword(email, password)
      .then(user => {
        dispatch({ type: types.AUTH_USER, user })
        dispatch(push('/'))
      })
      .catch(error => {
        dispatch(authError(error.message))
      })
  }
}

export function signoutUser() {
  return dispatch => {
    auth()
      .signOut()
      .then(user => {
        dispatch({ type: types.UNAUTH_USER })
      })
      .catch(error => {
        dispatch(authError(error.message))
      })
  }
}

function authError(error) {
  return { type: types.AUTH_ERROR, error }
}
