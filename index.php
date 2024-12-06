import React from 'react';
import{StyleSheet, View, FlatList, Image, Text} from 'react-native';

const App = () => {
  const photoData = [
  {
    id:'1',
    tiitle:'Mountain View',
    image:{
      uri:'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSPuTGakj4361BhkSJanul616qZmBVye_vFhw_gae-EPEZTM_-wKyY6hf-7DTsy100c1FA&usqp=CAU',
      width: 64,
      height: 64,
    },
    },
    {
      id:'2',
      title:'Beach Sunset',
      image:{
        uri:'https://th.bing.com/th/id/OIP.LkorFeN7gTEHpaOWsUWGkQHaFL?rs=1&pid=ImgDetMain',
        width: 64,
        height: 64,
      },
      },

      {
        id:'3',
        title:'City Skyline',
        image:{
          uri:'https://th.bing.com/th/id/OIP.sIdevmFyYkAEYlbGDUiDJAHaE7?rs=1&pid=ImgDetMain',
          width: 64,
          height: 64,
        },
        },
      ];
   //Render each photo item
const renderPhotoItem = ({ item }) => (
    <View style={styles.card}>
      <Image source={{uri:item.image.uri}}
      style={{width:item.image.width, height:item.image.height}}
      />
    <Text style={styles.title}>{item.title}</Text>
    </View>
  );

  return (

    <View style={styles.container}>
    <FlatList
    data={photoData}
    renderitem={renderPhotoItem}
    keyExtractor={(item) => item.id}
    />
    </View>
  );
};

const styles =StyleSheet.create({
  container:{
    flex:1,
    backgroundColor:'#f8f9fa',
    padding:10,
  },
  card:{
    backgroundColor:'#fff',
    marginBottom:10,
    borderRadius:10,
    overflow:'hidden',
    elevation:3,
    alignItems:'center',
    padding:10,
  },
  image:{
    resizeMode:'contain',
  },
  title:{
    fontSize:16,
    fontWeight:'bold',
    paddingTop:10,
    color:'#333',
  },
});

export default App;