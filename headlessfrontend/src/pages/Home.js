import React,{useEffect,useState} from 'react';
import axios from 'axios';

const Home = () => {
  const [posts,setPosts] = useState([]);
  useEffect(()=>{
    const fetchPosts = async () => {
      try {
        const response = await axios.get(
          'http://localhost/headlesswordpress/wordpress/wp-json/wp/v2/posts'
        );
        setPosts(response.data);
      } catch (error) {
        console.error('Error fetching posts:', error);
      }
    };

    fetchPosts();
  },[]);
  return (
    <div>
      <h1>WordPress Posts</h1>
      {posts.map((post) => (
        <div key={post.id}>
          <h2>{post.title.rendered}</h2>
          <div dangerouslySetInnerHTML={{ __html: post.content.rendered }} />
        </div>
      ))}
    </div>
  )
}

export default Home
