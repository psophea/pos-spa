import * as TYPES from '../../store/types'

const state = {
    menu_list: [],
}

/* eslint-disable no-param-reassign */
const mutations = {
    [TYPES.MENU_SET_SIDEBAR](st, obj) {
        st.menu_list = obj.menu_list
    },
}

const actions = {
    menuSetSidebar({ commit }, obj) {
        commit(TYPES.MENU_SET_SIDEBAR, obj)
    },
}

const module = {
    state,
    mutations,
    actions,
}

export default { module }
