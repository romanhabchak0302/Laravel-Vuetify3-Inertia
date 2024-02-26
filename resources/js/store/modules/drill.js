/********************************************************************
Global variables used for trainer friendly number assignments, drillIds,
and trainerIds.

As of July 2022 it was decided that an event include the following trainer counts:

  - Large Trainer:m 24
  - Small Trainer: 8
  - Start Trainer: 6
  
See PEP Testing Trainer List.xlxs
  
Therefore the arrays below have yet to be updated

*********************************************************************/

import { defineStore } from 'pinia';

export const useDrillStore = defineStore('drill', {
  actions: {
  },

  getters: {
  },

  state: () => ({
    // number of large trainers in Joes Testing Set
    joeTsetLgCount: 16,
    // number of small trainers in Joes Testing Set
    joeTsetSmCount: 16,
    // number of start trainers in Joes Testing Set
    joeTsetStCount: 8,

    // Large Trainer Data
    joeTsetLg: ['LGVP986J', 'LGKT560R', 'LGGS727C', 'LGFK828G', 'LGUD360I', 'LGPV271X', 'LGUH262C', 'LGDX428O', 'LGXL369X', 'LGIJ877S', 'LGRJ688G', 'LGHB546C', 'LGHC517H', 'LGZV183Y', 'LGID809Z', 'LGWC764H'],
    // Small Trainer Data
    joeTsetSm: ['SMIA864L', 'SMUC683W', 'SMQJ744N', 'SMFR702M', 'SMLW838B', 'SMKQ352X', 'SMUA734B', 'SMQU992I', 'SMTL649T', 'SMXP570T', 'SMJI300H', 'SMFL400C', 'SMJC976R', 'SMJF513P', 'SMLL935G','SMVI466T'],
    // Start Trainer Data
    joeTsetSt: ['STJS439J', 'STRR745X', 'STET647V', 'STST361Q', 'STNN571Z', 'STKN779J', 'STBV970A', 'STOZ125Y'],

    joeTsetClnId: [1, 2, 3, 4, 5, 6, 7],
    joeTsetSrvId: [8, 9, 10, 11, 12, 13],

    // DrillId array, 60 unique codes, reuse cycle
    drillIds: ['OI248S', 'WF692R', 'WF457H', 'WY188T', 'WV555S', 'YD237M', 'HI499E', 'MD288B', 'OC523N', 'MU628M', 'PS789J', 'GC134V', 'ZN755V', 'ZG562B', 'PP610Q', 'ZL205M', 'OI610Z', 'YY182O', 'YM707E', 'XX436R', 'GK803A', 'SY889D', 'KF372J', 'MY548Y', 'BX825K', 'KD115Q', 'CJ246G', 'UF515L', 'PB979B', 'EK152M', 'QR535T', 'XN413T', 'KJ455S', 'MV361W', 'FH292Q', 'XD304Q', 'TL269W', 'QA545Q', 'WH695R', 'AD536M', 'IS968G', 'HU999H', 'YW747N', 'BG650A', 'IH442L', 'JH830E', 'PE257G', 'VV645C', 'ZY793D', 'DH182D', 'PG158B', 'HV667C', 'AP530P', 'WL986N', 'RH661R', 'GT573U', 'LO133K', 'VA526O', 'HY628J'],
  })
});
