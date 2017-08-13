import { db } from '../constants/api'
import types from '../constants/types'
import { SAMPLE_BOARDS, SAMPLE_VIDEOS } from '../constants/sample'

export const importStorage = () => (dispatch, getState) => {
  const { authenticated } = getState().auth
  dispatch({ type: types.IMPORT_STORAGE, boards: SAMPLE_BOARDS, videos: SAMPLE_VIDEOS })

  if (authenticated) {
    const updates = {
      [`/boards`]: SAMPLE_BOARDS,
      [`/videos`]: SAMPLE_VIDEOS
    }

    dispatch({ type: types.APP_STATUS, status: 'App is importing sample' })

    db
      .ref()
      .update(updates)
      .then(() => {
        dispatch({ type: types.APP_STATUS, status: null })
      })
      .catch(error => {
        dispatch({ type: types.APP_STATUS, status: error.message })
        dispatch({ type: types.IMPORT_STORAGE, boards: {}, videos: {} })
      })
  }
}

export const emptyStorage = () => (dispatch, getState) => {
  const { authenticated } = getState().auth
  dispatch({ type: types.EMPTY_STORAGE })

  if (authenticated) {
    const updates = {
      [`/boards`]: null,
      [`/videos`]: null
    }

    dispatch({ type: types.APP_STATUS, status: 'App is emptying storage' })

    db
      .ref()
      .update(updates)
      .then(() => {
        dispatch({ type: types.APP_STATUS, status: null })
      })
      .catch(error => {
        dispatch({ type: types.APP_STATUS, status: error.message })
      })
  }
}
