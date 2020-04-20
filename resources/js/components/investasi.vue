<template>
<div>
   <section class="hero-banner">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <el-tabs v-model="activeName">
              <el-tab-pane label="PENANAMAN MODAL ASING (PMA)" name="first">
                <el-select v-model="chart.type" placeholder="Pilih Type Chart" @change="getRealiasi()">
                  <el-option
                    v-for="item in options"
                    :key="item.value"
                    :label="item.label"
                    :value="item.value">
                  </el-option>
                </el-select>
                <el-divider></el-divider>

                <zingchartVue :data="pma"></zingchartVue>

                <el-table
                    border
                    :data="table.pma.data.filter(data => !table.pma.search || data.tahun.toLowerCase().includes(table.pma.search.toLowerCase()))"
                    style="width: 100%">
                    <el-table-column
                      label="Tahun"
                      prop="tahun">
                    </el-table-column>
                    <el-table-column
                      label="investasi (US$. Ribu)"
                      prop="investasi">
                    </el-table-column>
                     <el-table-column
                      label="Nilai Dalam Rupiah (Triliyun)"
                      prop="investasi_rupiah">
                    </el-table-column>
                    <el-table-column
                      align="right">
                      <template slot="header" slot-scope="scope">
                        <el-input
                          v-model="table.pma.search"
                          size="mini"
                          placeholder="Type to search"/>
                      </template>
                      <template slot-scope="scope">
                        
                      </template>
                    </el-table-column>
                  </el-table>

                </el-tab-pane>
              <el-tab-pane label="PENANAMAN MODAL DALAM NEGRI (PMDN)" name="second">
                 <el-select v-model="chart.type" placeholder="Pilih Type Chart" @change="getRealiasi()">
                  <el-option
                    v-for="item in options"
                    :key="item.value"
                    :label="item.label"
                    :value="item.value">
                  </el-option>
                </el-select>
                <el-divider></el-divider>

                <zingchartVue :data="pmdn"></zingchartVue>

                <el-table
                    border
                    :data="table.pmdn.data.filter(data => !table.pmdn.search || data.tahun.toLowerCase().includes(table.pmdn.search.toLowerCase()))"
                    style="width: 100%">
                    <el-table-column
                      label="Tahun"
                      prop="tahun">
                    </el-table-column>
                    <el-table-column
                      label="investasi (US$. Ribu)"
                      prop="investasi">
                    </el-table-column>
                     <el-table-column
                      label="Nilai Dalam Rupiah (Triliyun)"
                      prop="investasi_rupiah">
                    </el-table-column>
                    <el-table-column
                      align="right">
                      <template slot="header" slot-scope="scope">
                        <el-input
                          v-model="table.pmdn.search"
                          size="mini"
                          placeholder="Type to search"/>
                      </template>
                      <template slot-scope="scope">
                        
                      </template>
                    </el-table-column>
                  </el-table>

                </el-tab-pane>

              </el-tab-pane>
            </el-tabs>
          </div>
       </div>
      </div>
      <br/><br/><br/>
    </section>
</div>
</template>


<script>
import urlbase from '@/js/url';
import zingchartVue from 'zingchart-vue';

export default {
    data(){
        return{
            url : {
                images  : urlbase.urlWeb+'/public/img'
            },
            activeName : "first",
            pma: {},
            pmdn: {},
            chart : {
              type : "line"
            },
            options: [{
                value: 'line',
                label: 'Line'
              }, {
                value: 'bar',
                label: 'Bar'
            }],
            table : {
                pma :{
                  data   : [],
                  search : null
                },
                pmdn :{
                  data   : [],
                  search : null
                }
            }
        }
    },
    mounted() {
       this.getRealiasi();
    },
    components:{
      zingchartVue
    },
    methods:{
      getRealiasi(){
        axios.post(urlbase.urlWeb+'/realisasi',{
          type : "realisasi",
          chartType : this.chart.type
        })
        .then(r => {
            this.pma = r.data.pma.grafik,
            this.pmdn = r.data.pmdn.grafik

            this.table.pma.data = r.data.pma.table,
            this.table.pmdn.data = r.data.pmdn.table
        });
      }
    },
}
</script>

<style>
      .el-menu-vertical-demo:not(.el-menu--collapse) {
        width: 200px;
        min-height: 400px;
      }
    </style>